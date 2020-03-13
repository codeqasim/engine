<?php

class Modules_Model extends CI_Model
{
    public function __construct()
    {

    }
    public function modules($id)
    {
        $result = $this->db->get('modules')->result();
        $role_title = $this->db->where("id",$id)->get('accounts_types')->row();
        $this->db->select("accounts_roles_types.*,modules.*,accounts_types.type");
        $this->db->join('accounts_roles_types', 'accounts_roles_types.module_id = modules.id','left');
        $this->db->join('accounts_types', 'accounts_types.id = account_type_id','left');
        $this->db->where("accounts_roles_types.account_type_id",$id);
        $roles_account = $this->db->get('modules')->result();
        foreach ($result as &$item)
        {
            foreach ($roles_account as $role)
            {
                if($role->module_id == $item->id)
                {
                    $item->module_edit = $role->module_edit;
                    $item->module_delete = $role->module_delete;
                    $item->module_add = $role->module_add;
                    $item->module_view = $role->module_view;
                    $item->is_active = $role->is_active;
                    $item->module_view_own = $role->module_view_own;
                    $item->module_view_global = $role->module_view_global;
                    $item->type = $role->type;
                }
            }
        }

        if(!empty($role_title))
        {
            $role_title = $role_title->type;
        }else{
            $role_title = "";
        }
        return (object)array("role_title"=>$role_title,"result"=>$result);

    }
    public function insert_modules_types($modules,$type_id,$value)
    {
        if(empty($type_id))
        {
            $type_id = $this->insert_types($value);
        }
        $data = [];
        foreach ($modules as $module)
        {
            array_push($data,["module_id"=>$module,"account_type_id"=>$type_id]);
        }
        $this->db->insert_batch("accounts_modules",$data);
        return $this->modules(0);
    }
    public function update_roles_types($post,$type_id)
    {
         $this->insert_types($post["role"],$type_id);
        $result = [];

        foreach ($post as $key=>$p)
        {
            if(is_numeric($key))
            {
                $add = in_array("add",$p) ? 1 : 0;
                $delete = in_array("delete",$p) ? 1 : 0;
                $edit = in_array("edit",$p) ? 1 : 0;
                $view = in_array("view",$p) ? 1 : 0;
                $on = in_array("on",$p) ? 1 : 0;
                $view_own = in_array("view_own",$p) ? 1 : 0;
                $view_global = in_array("view_global",$p) ? 1 : 0;
                array_push(
                    $result,[
                        "module_id"=>$key,
                        "module_edit"=>$edit,
                        "module_delete"=>$delete,
                        "module_view"=>$view,
                        "module_add"=>$add,
                        "module_view_own"=>$view_own,
                        "module_view_global"=>$view_global,
                        "account_type_id"=>$type_id,
                        "is_active"=>$on
                    ]);
            }
        }
        $this->db->where('account_type_id',$type_id);
        $this->db->delete('accounts_roles_types', array('account_type_id' => $type_id));
        if(!empty($result))
        {

            $this->db->insert_batch("accounts_roles_types",$result);
        }
        return $this->modules($type_id);
    }
    public function insert_types($value,$type_id=0)
    {
        if($type_id == 0)
        {
            $array = array("type"=>$value);
            $this->db->insert('accounts_types',$array);
            return $this->db->insert_id();
        }else{
            $array = array("type"=>$value);
            $this->db->where('id',$type_id);
            $this->db->update('accounts_types',$array);
        }

    }
    public function delete_account_type($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('accounts_types');

        $this->db->where('account_type_id',$id);
        $this->db->delete('accounts_roles_types');
    }
    public function delete_all_cms($id)
    {
        $this->db->where_in('id',$id);
        $this->db->delete('module_cms');
    }
    public function insert_roles_types($post)
    {

        $type_id = $this->insert_types($post["role"]);
        $result = [];
        foreach ($post as $key=>$p)
        {
            if(is_numeric($key))
            {

                $add = in_array("add",$p) ? 1 : 0;
                $delete = in_array("delete",$p) ? 1 : 0;
                $edit = in_array("edit",$p) ? 1 : 0;
                $view = in_array("view",$p) ? 1 : 0;
                $on = in_array("on",$p) ? 1 : 0;
                $view_own = in_array("view_own",$p) ? 1 : 0;
                $view_global = in_array("view_global",$p) ? 1 : 0;
                array_push($result,[
                    "module_id"=>$key,
                    "module_edit"=>$edit,
                    "module_delete"=>$delete,
                    "module_view"=>$view,
                    "module_add"=>$add,
                    "account_type_id"=>$type_id,
                    "module_view_own"=>$view_own,
                    "module_view_global"=>$view_global,
                    "is_active"=>$on
                ]);
            }
        }
        $this->db->insert_batch("accounts_roles_types",$result);
    }
    public function get_modules()
    {
        return $this->db->get('modules')->result();
    }



}