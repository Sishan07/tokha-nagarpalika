<?php

session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}

$page_title = "User Dashboard";

include("header.php");
include("navbar.php");


?>

<form action="formdata/insert.php" method="post" class="custom-form">

    <label for="ward_number">वडा न.:</label>
    <input type="text" id="ward_number" name="ward_number"><br>

    <label for="full_name">टोल / बस्ति को पुरा नाम:</label>
    <input type="text" id="full_name" name="full_name"><br>

    <label for="head_of_household_name">घरमुलीको पुरा नाम:</label>
    <input type="text" id="head_of_household_name" name="head_of_household_name"><br>

    <label for="gender">घरमुलीको लिङ्ग:</label>
    <input type="text" id="gender" name="gender"><br>

    <label for="male_count">पुरुष शंक्या:</label>
    <input type="text" id="male_count" name="male_count"><br>

    <label for="female_count">महिला शंक्या:</label>
    <input type="text" id="female_count" name="female_count"><br>

    <label for="total_population">Total Population:</label>
    <input type="text" id="total_population" name="total_population"><br>

    <label for="eligible_voters">तपाईको घरमा कति जना मतदाता हुनुहुन्छ ?</label>
    <input type="text" id="eligible_voters" name="eligible_voters"><br>

    <label for="ethnicity">जातियता:</label>
    <input type="text" id="ethnicity" name="ethnicity"><br>

    <label for="religion">कुन धर्म मान्नुहुन्छ ?</label>
    <input type="text" id="religion" name="religion"><br>

    <label for="language_used">कुन भाषा प्रयोग गर्नुहुन्छ ?</label>
    <input type="text" id="language_used" name="language_used"><br>

    <label for="marital_status">घरमुलीको बैबहिक स्थिति के हो ?</label>
    <input type="text" id="marital_status" name="marital_status"><br>

    <label for="ownership_status">घरको स्वामित्व:</label>
    <input type="text" id="ownership_status" name="ownership_status"><br>

    <label for="compliant_to_municipality_standards">तपाई बसेको घर नगरपालिकाको मापदण्ड अनुसार बनेको छ ?</label>
    <input type="text" id="compliant_to_municipality_standards" name="compliant_to_municipality_standards"><br>

    <label for="registration_status">तपाईको घरको अभिलेखिकरण भएको छ ?</label>
    <input type="text" id="registration_status" name="registration_status"><br>

    <label for="house_type">घरको प्रकार तथा किसिमः</label>
    <input type="text" id="house_type" name="house_type"><br>

    <label for="number_of_floors">तपाईको घर कति तल्लाको छ ?</label>
    <input type="text" id="number_of_floors" name="number_of_floors"><br>

    <label for="anyone_renting_at_home">तपाईको घरमा कोहि भाडामा बस्नु हुन्छ ?</label>
    <input type="text" id="anyone_renting_at_home" name="anyone_renting_at_home"><br>

    <label for="land_area_owned">तपाईको परिवारको नाममा जग्गा कति छ ?</label>
    <input type="text" id="land_area_owned" name="land_area_owned"><br>

    <label for="monthly_family_income">औसत मासिक पारिवारिक आम्दानी (हजारमा)</label>
    <input type="text" id="monthly_family_income" name="monthly_family_income"><br>

    <label for="annual_child_births">तपाईको परिवारको वार्षिक बाली उत्पादन छ ?</label>
    <input type="text" id="annual_child_births" name="annual_child_births"><br>

    <label for="months_of_food_sufficiency">आफ्नो उत्पादनले तपाईको परिवारलाई कति महिना खान पुग्छ</label>
    <input type="text" id="months_of_food_sufficiency" name="months_of_food_sufficiency"><br>

    <label for="presence_of_livestock">तपाईको परिवारमा कुनै चौपाया तथा पशुपंक्षी पाल्नुभएको छ ?</label>
    <input type="text" id="presence_of_livestock" name="presence_of_livestock"><br>

    <label for="unemployed_person_in_family">तपाईको परिवारमा कमाउन सक्ने सिपयुक्त व्यक्ति बेरोजगार बसेको छ ?</label>
    <input type="text" id="unemployed_person_in_family" name="unemployed_person_in_family"><br>

    <label for="engaged_in_any_business">तपाईले कुनै किसिमको व्यापार / व्यवसाय गर्नु भएको छ ?</label>
    <input type="text" id="engaged_in_any_business" name="engaged_in_any_business"><br>

    <label for="family_members_working_abroad">परिवारका सदस्य रोजगारीका लागि विदेश गएका छन् भने ?</label>
    <input type="text" id="family_members_working_abroad" name="family_members_working_abroad"><br>

    <label for="presence_of_children">घरमा बालबालिका छन् ?</label>
    <input type="text" id="presence_of_children" name="presence_of_children"><br>

    <label for="where_children_study">बालबालिकाहरु कहाँ अध्यनरत छन् ?</label>
    <input type="text" id="where_children_study" name="where_children_study"><br>

    <label for="malnourished_children_count">तपाईको परिवारमा कुनै बालबालिका कम तौलका छन ?</label>
    <input type="text" id="malnourished_children_count" name="malnourished_children_count"><br>

    <label for="differently_abled_person_present">तपाईको परिवारमा कुनै ब्यक्ति भिन्न क्षमता भएका छन्?</label>
    <input type="text" id="differently_abled_person_present" name="differently_abled_person_present"><br>

    <label for="member_with_serious_illness">तपाईको परिवारको सदस्यलाई कुनै दीर्घ रोग लागेको छ ?</label>
    <input type="text" id="member_with_serious_illness" name="member_with_serious_illness"><br>

    <label for="minors_sent_out_of_home">तपाईले आफ्नो घरमा बाहिरवाट ल्याएर १६ वर्ष भन्दा कम उमेरका बालबालिकालाई राख्नु भएको छ ?</label>
    <input type="text" id="minors_sent_out_of_home" name="minors_sent_out_of_home"><br>

    <label for="awareness_of_child_rights">तपाइलाई बाल अधिकारको वारेमा थाहा छ ?</label>
    <input type="text" id="awareness_of_child_rights" name="awareness_of_child_rights"><br>

    <label for="awareness_of_child_labor_issues">तपाइलाई बालश्रमको वारेमा थाहा छ ?</label>
    <input type="text" id="awareness_of_child_labor_issues" name="awareness_of_child_labor_issues"><br>

    <label for="awareness_of_child_abuse">तपाइलाई बालहिंसाको वारेमा थाहा छ ?</label>
    <input type="text" id="awareness_of_child_abuse" name="awareness_of_child_abuse"><br>

    <label for="birth_certificates_for_children">तपाइले आफ्ना वालवालिकाको जन्मदर्ता गर्नु भएको छ ?</label>
    <input type="text" id="birth_certificates_for_children" name="birth_certificates_for_children"><br>

    <label for="out_of_school_children_count">तपाईको परिवारमा विद्यालय भर्ना नभएका बालबालिका छन् |</label>
    <input type="text" id="out_of_school_children_count" name="out_of_school_children_count"><br>

    <label for="dropping_out_of_school">तपाईको परिवारमा विचैमा पढाई छोड्ने बालबालिका छन कि छैनन्?</label>
    <input type="text" id="dropping_out_of_school" name="dropping_out_of_school"><br>

    <label for="source_of_drinking_water">तपाईको परिवारको खानेपानीको स्रोत कुन हो ?</label>
    <input type="text" id="source_of_drinking_water" name="source_of_drinking_water"><br>

    <label for="toilet_facility">तपाईको घरमा शौचालय ?</label>
    <input type="text" id="toilet_facility" name="toilet_facility"><br>

    <label for="type_of_toilet_facility">तपाइ परिवारले प्रयोग गर्ने शौचालय कस्तो छ ?</label>
    <input type="text" id="type_of_toilet_facility" name="type_of_toilet_facility"><br>

    <label for="electricity_connection">तपाईको घरमा बिजूली जडान छ ?</label>
    <input type="text" id="electricity_connection" name="electricity_connection"><br>

    <label for="cooking_fuel_source">तपाईको घरमा खाना पकाउन प्रयोग हुने इन्धन कुन हो?</label>
    <input type="text" id="cooking_fuel_source" name="cooking_fuel_source"><br>

    <label for="cooking_stove_type">तपाईको घरको कस्तो प्रकारको चूल्हो प्रयोग गर्नुहुन्छ ?</label>
    <input type="text" id="cooking_stove_type" name="cooking_stove_type"><br>

    <label for="transportation_facility">तपाईको घरमा यातायातको साधन छ कि छैन ?</label>
    <input type="text" id="transportation_facility" name="transportation_facility"><br>

    <label for="communication_facilities">तपाईको घरमा संचारका साधनहरु के के छन् ?</label>
    <input type="text" id="communication_facilities" name="communication_facilities"><br>

    <label for="presence_of_community_forest">तपाईको परिवार कुनै गुठीमाआवद्व हनुहुन्छ ?</label>
    <input type="text" id="presence_of_community_forest" name="presence_of_community_forest"><br>

    <label for="natural_disaster_vulnerability">तपाइको घर नजिक प्राकृतिक प्रकोपको सम्भावनाछ कि छैन ?</label>
    <input type="text" id="natural_disaster_vulnerability" name="natural_disaster_vulnerability"><br>

    <label for="waste_disposal_method">तपाईको घरबाट निस्केको फोहोर मैला कहाँ / कसरी व्यवस्थापन गर्नुहुन्छ ?</label>
    <input type="text" id="waste_disposal_method" name="waste_disposal_method"><br>

    <label for="latitude">_जी.पी. यस_latitude:</label>
    <input type="text" id="latitude" name="latitude"><br>

    <label for="longitude">_जी.पी. यस_longitude:</label>
    <input type="text" id="longitude" name="longitude"><br>

    <div class="form-submit">
        <input type="submit" value="Submit">
    </div>

</form>


<?php include("footer.php"); ?>