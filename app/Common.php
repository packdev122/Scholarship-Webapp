<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Common
{
    public static $questions = [
        1=>'1. Which Sustainable Development Goals (SDG) do you want to work towards and why? (500 words) Share with us your reasons to include your personal motivation and professional reasons (skill, area of interest, experience) to do this.',
        2=>'2. What is the problem you aim to address? (1000 words)Share the narrative of the problem as you see it in the country/ world.',
        3=>'3. What is your big idea that aligns with the Sustainable Development Goals? ( 1000 words ) Your own mission and solution towards contributing to the Sustainable Development Goals. Include your thought process on the potential feasibility and its replicability for impact.',
        4=>'4. If selected as the AIM Scholar, what is the proposed action plan that you would like to work on in India.
        -Please give detailed and specific objectives you plan to achieve
        -Share a quarterly milestone plan that you plan to achieve ',
        5=>'5. Any specific electives you have taken at Sloan which might help you develop this plan. (500 words)',
        6=>'6. Any other scholarship / awards / events that you have applied for and / or won towards your project. (500 words)',
        7=>'7. Any previous experience which aligns with your proposed project that you would like to share. (500 words)',
        8=>'8. Upload your video (link) to tell us your story and your idea. Limit your video to maximum 2 minutes.',
        9=>'9. Upload other supporting documents to share your interest (maximum 3 files).',
        10=>'10. What are your plans after completion of the initial execution phase (500 words)',
        11=>'11. How do you think your proposed solution can be funded for scale in the future?',
        12=>'12. Please provide your confirmations to the below: (Indicate your preference. Your response is not legally binding)',
    ];
    public static $jury_desc = [
        1=>'Assessment criteria for Jury - MOTIVATION<br>
        -Previous voluteering work undertaken<br>
        -Showcase of impact through direct or indirect investment <br>
        -Family history',
        2=>'Assessment criteria for Jury - ACTION<br>
        -Scale of the problem (Use a lens to view the problem in a Country )<br>',
        3=>'Assessment criteria for Jury - ACTION<br>
        -Scale of the problem (Use a lens to view the problem in a Country )<br>',
        4=>'Assessment criteria for Jury - ACTION<br>
        -Look for a clear, well-devised project plan<br>
        -Outlay of timelines, partners<br>
        -Look for current status of the project',
        5=>'',
        6=>'',
        7=>'',
        8=>'Assessment criteria for Jury <br>
        -Look for the core values - ACTION | IMPACT | MOTIVATION<br>',
        9=>'-Primary research work that is undertaken (including statistical data)<br>
        -Previous research reports, paper or blogs written by you <br>
        -Independent study report that is undertaken at MIT Sloan<br>
        -Pitch presentation <br>
        -User stories/Videos/ pictures (Any form) conducted by you<br>',
        10=>'Assessment criteria for Jury<br>
        -Look for willingness to pursue the cause as an entreprenuer.<br>',
        11=>'Assessment criteria for Jury<br>
        -Assess the plan around possible funding options<br>',
        12=>''
    ];
    public static $sdg_goals = [
        0=>'No Poverty',
        1=>'Zero Hunger',
        2=>'Good Health and Well-being',
        3=>'Quality Education',
        4=>'Gender Equality',
        5=>'Clean Water and Sanitation',
        6=>'Affordable and Clean Energy',
        7=>'Decent Work and Economic Growth',
        8=>'Industry, Innovation and Infrastructure',
        9=>'Reduced Inequality',
        10=>'Sustainable Cities and Communities',
        11=>'Responsible Consumption and Production',
        12=>'Climate Action',
        13=>'Life Below Water',
        14=>'Life on Land',
        15=>'Peace and Justice Strong Institutions',
        16=>'Partnerships to achieve the Goal',
    ];
    public static $qualifications = [
        0=>'BA',
        1=>'BSc',
        2=>'BCom',
        3=>'BE',
        4=>'BEd',
        5=>'BTech',
        6=>'Masters',
        7=>'MBA',
        8=>'EMBA',
        9=>'Phd',
        10=>'Other',
    ];
    public static $member_specify = [
        0=>'Co-Founder',
        1=>'colleague',
        2=>'spouse',
    ];
    public static $email_types = [
        0=>'Submission of Application',
        1=>'Receive of application',
        2=>'Acceptance of Application',
        3=>'Reject of application',
        4=>'Check application(Applicant)',
        5=>'Check application(Admin)',
        6=>'Assign of application(Jury)',
        7=>'Assign of application(Applicant)',
        8=>'Registration',
    ];
    public static function getMemberTableContent($content){
        $contents = explode("##" , $content);
        $html = "";
        // dd($content);
        if($content){
            foreach($contents as $cc){
                $items = explode("||" , $cc);
                $html .= "<tr>";
                $html .= "<td>".$items[0]."</td>";
                $html .= "<td>".$items[1]."</td>";
                $html .= "<td>".Common::$member_specify[$items[2]]."</td>";
                $html .= "<td>".Common::$qualifications[$items[3]]."</td>";
                $html .= "<td class='member_trash_td'>"."<a onclick='RemoveMember($(this))'><i class='fa fa-trash'></i></a>"."</td>";
                $html .= "</tr>";
            }
        }
        return $html;
    }
}
