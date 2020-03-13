<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('build_path')) {

    function home_meta()
    {
        $url = base_url();
        $title = "TECFARE - Everywhere";
        $desc = "tecfare helps every industry through its technical services. we a pure software company based in lahore and helping thousand of business's and individuals around the world. we aim to provide solutions for all the industries through our multiple solutions.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."main.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function products_meta()
    {
        $url = base_url();
        $title = "TECFARE - Products";
        $desc = "Digital products can be created once and sold repeatedly. Here how you can get started selling your own digital products, along with some ideas to inspire you.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."travel.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function crm_meta()
    {
        $url = base_url();
        $title = "TECFARE - CRM";
        $desc = "Tecfare defines CRM as a strategy for managing all your company relationships and interactions with customers and potential customers. It helps you stay connected to them.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."crm.png";
        return global_meta($title,$desc,$url,$img,$author);
    }
   

    function school_management_system_meta()
    {
        $url = base_url();
        $title = "TECFARE - School Management System";
        $desc = "TECFARE is one the best school management system available in market to manage your school operations in best manners. We offer a comprehensive, affordable and easy to use school management software for meeting all your needs, Lets manage your school with our school management system, Download the school management system Now.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."school_management_system.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function franchise_meta()
    {
        $url = base_url();
        $title = "TECFARE - Franchise";
        $desc = "Search the franchise directory for franchises for sale, business opportunities and franchising information. Find franchise information that will allow you to start a small business and become a franchise owner.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."franchise.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function legal_meta()
    {
        $url = base_url();
        $title = "TECFARE - Legal";
        $desc = "Tecfare is a Lahore based law firm in Pakistan giving full service as corporate law firm. Our lawyers in pakistan, solicitors and attorneys have become a profession benchmark throughout Lahore courts and Karachi judiciary of Pakistan";
        $author = "TECFARE";
        $img = PAGES_META_IMG."main.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function branches()
    {
        $url = base_url();
        $title = "TECFARE - Legal";
        $desc = "Find-out our branche nearby your area and get in touch with them to get your product and services ready within minutes.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."main.png";
        return global_meta($title,$desc,$url,$img,$author);
    }
    
    function domain_meta()
    {
        $url = base_url();
        $title = "TECFARE - Register your domain name";
        $desc = "TECFARE offers cheap domain names with the most reliable service. Buy domain names with tecfare and see why over 2 million customers trust us with over 10 million domains!";
        $author = "TECFARE";
        $img = PAGES_META_IMG."main.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function sms_meta()
    {
        $url = base_url();
        $title = "TECFARE - SMS marketing software";
        $desc = "Sms marketing software allows businesses to efficiently connect with their customers in large volumes. Mass SMS can be sent online using SMS software which allows users to personalize, stagger and schedule their campaigns. Bulk SMS is the most direct method to reach customers with an open rate of 98%.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."sms.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function contact_meta()
    {
        $url = base_url('contact');
        $title = "TECFARE - Contact Us";
        $desc = "Contact us and let us help you to innovate new ideas to grow your potential in market. we are a team of highly skilled and professional people around the globe. we use latest technology to improve and automate and  digitalize any business.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."contact.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function newsletter_meta()
    {
        $url = base_url('newsletter');
        $title = "TECFARE - Newsletter";
        $desc = "Thank you for joining our newsletter we will soon update you. please update your email and re-subscribe to our newseltter if you moved or changed your old email to new one. and it will be very pleasure for us to have you in touch with us.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."newsletter.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function terms_meta()
    {
        $url = base_url('terms');
        $title = "TECFARE - terms and conditions";
        $desc = "Please take your time to read our business terms and conditions completely before you order or hire any of our services.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."main.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function policy_meta()
    {
        $url = base_url('policy');
        $title = "TECFARE - Policy";
        $desc = "Read our policy before buying or hiring any services from TECFARE.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."main.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function team_meta()
    {
        $url = base_url('team');
        $title = "TECFARE - Our Team";
        $desc = "We are made of a highly professional and passionate people. all of us have a new story to tell in a very unique style. We're engineers, designers, owners, hotel managers, big data experts, and avid travelers. Made up of more than 40 people in 4 different countries.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."team.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function error_meta()
    {
        $url = base_url('404');
        $title = "TECFARE - ERROR 404";
        $desc = "Error 404 no page found johny! go back home";
        $author = "TECFARE";
        $img = PAGES_META_IMG."404.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function about_meta()
    {
        $url = base_url('about');
        $title = "TECFARE - About Us";
        $desc = "TECFARE is a software company build with aim to empower the local IT industry and people through our various set of services and solutions.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."main.png";
        return global_meta($title,$desc,$url,$img,$author);
    }
     function airbnb_clonescript()
    {
        $url = base_url('airbnb_clonescript');
        $title = "TECFARE - Airbnb-clone-script";
        $desc = "TECFARE is a Directory for Free and Commercial Clone Scripts of Popular Websites. Find the Best Clone Scripts to Start Your Own Website!"; 
        $author = "TECFARE";
        $img = PAGES_META_IMG."main.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function media_meta()
    {
        $url = base_url('media-kit');
        $title = "TECFARE - Media Kit";
        $desc = "Use mainly the color logo whenever possible to represent TECFARE we have a complete media kit to represent our brand at every size and platoform.";
        $author = "TECFARE";
        $img = PAGES_META_IMG."main.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function signup_meta()
    {
        $url = base_url('signup');
        $title = "TECFARE - OTA Signup";
        $desc = "Signup with and start using our portal with different platforms from mobile apps to web and desktop applications";
        $author = "TECFARE";
        $img = PAGES_META_IMG."main.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function login_meta()
    {
        $url = base_url('login');
        $title = "TECFARE - login";
        $desc = "Login to your account as a OTA online travel agency and start managing your portal through our smart and cloud based system";
        $author = "TECFARE";
        $img = PAGES_META_IMG."account.png";
        return global_meta($title,$desc,$url,$img,$author);
    }

    function global_meta($title,$desc,$url,$img,$author)
    {
        // general
        $final_array = [];

        // facebook
        array_push($final_array,add_meta('property',"og:title",$title));
        array_push($final_array,add_meta('property',"og:description",$desc));
        array_push($final_array,add_meta('property',"og:url",$url));
        array_push($final_array,add_meta('property',"og:image",$img));
        array_push($final_array,add_meta('property',"og:site_name",$author));

        // twitter
        array_push($final_array,add_meta('name',"title",$title));
        array_push($final_array,add_meta('name',"description",$desc));
        array_push($final_array,add_meta('name',"twitter:url",$url));
        array_push($final_array,add_meta('name',"twitter:site",$author));
        array_push($final_array,add_meta('name',"twitter:description",$desc));
        array_push($final_array,add_meta('name',"twitter:image",$img));

        return $final_array;
    }

    function add_meta($pname,$pavlue,$pcontent)
    {
     return (object)["pname"=>$pname,"pvalue"=>$pavlue,"pcontent"=>$pcontent];
    }

    function site_map()
    {
        return [
            "login/",
            "signup/",
            "about/",
            "contact/",
            "team/",
            "terms/",
            "policy/",
            "media-kit/",
            "products/",
            "franchise/",
            "domain/",
            "branches/",
        ];
    }
}