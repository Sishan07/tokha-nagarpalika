<?php

session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}

$page_title = "User Dashboard";

include("header.php");
include("navbar.php");


$recordsPerPage = 1000;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($currentPage - 1) * $recordsPerPage;


$initialSN = ($currentPage - 1) * $recordsPerPage + 1;





?>




<table id="editableTable">
    <thead>
        <tr>
            <th>SN</th>
            <th>वडा न.</th>
            <th>टोल / बस्ति को पुरा नाम</th>
            <th>घरमुलीको पुरा नाम</th>
            <th>घरमुलीको लिङ्ग</th>
            <th>पुरुष शंक्या</th>
            <th>महिला शंक्या</th>
            <th>Total Population</th>
            <th>तपाईको घरमा कति जना मतदाता हुनुहुन्छ ?</th>
            <th>जातियता</th>
            <th>कुन धर्म मान्नुहुन्छ ?</th>
            <th>कुन भाषा प्रयोग गर्नुहुन्छ ?</th>
            <th>घरमुलीको बैबहिक स्थिति के हो ?</th>
            <th>घरको स्वामित्व</th>
            <th>तपाई बसेको घर नगरपालिकाको मापदण्ड अनुसार बनेको छ ?</th>
            <th>तपाईको घरको अभिलेखिकरण भएको छ ?</th>
            <th>घरको प्रकार तथा किसिमः</th>
            <th>तपाईको घर कति तल्लाको छ ?</th>
            <th>तपाईको घरमा कोहि भाडामा बस्नु हुन्छ ?</th>
            <th>तपाईको परिवारको नाममा जग्गा कति छ ?</th>
            <th>औसत मासिक पारिवारिक आम्दानी (हजारमा)</th>
            <th>तपाईको परिवारको वार्षिक बाली उत्पादन छ ?</th>
            <th>आफ्नो उत्पादनले तपाईको परिवारलाई कति महिना खान पुग्छ</th>
            <th>तपाईको परिवारले कुनै चौपाया तथा पशुपंक्षी पाल्नुभएको छ ?</th>
            <th>तपाईको परिवारमा कमाउन सक्ने सिपयुक्त व्यक्ति बेरोजगार बसेको छ ?</th>
            <th>तपाईले कुनै किसिमको व्यापार / व्यवसाय गर्नु भएको छ ?</th>
            <th>परिवारका सदस्य रोजगारीका लागि विदेश गएका छन् भने ?</th>
            <th>घरमा बालबालिका छन् ?</th>
            <th>बालबालिकाहरु कहाँ अध्यनरत छन् ?</th>
            <th>तपाईको परिवारमा कुनै बालबालिका कम तौलका छन ?</th>
            <th>तपाईको परिवारमा कुनै ब्यक्ति भिन्न क्षमता भएका छन्?</th>
            <th>तपाईको परिवारको सदस्यलाई कुनै दीर्घ रोग लागेको छ ?</th>
            <th>तपाईले आफ्नो घरमा बाहिरवाट ल्याएर १६ वर्ष भन्दा कम उमेरका बालबालिकालाई राख्नु भएको छ ?</th>
            <th>तपाइलाई बाल अधिकारको वारेमा थाहा छ ?</th>
            <th>तपाइलाई बालश्रमको वारेमा थाहा छ ?</th>
            <th>तपाइलाई बालहिंसाको वारेमा थाहा छ ?</th>
            <th>तपाइले आफ्ना वालवालिकाको जन्मदर्ता गर्नु भएको छ ?</th>
            <th>तपाईको परिवारमा विद्यालय भर्ना नभएका बालबालिका छन् |</th>
            <th>तपाईको परिवारमा विचैमा पढाई छोड्ने बालबालिका छन कि छैनन्?</th>
            <th>तपाईको परिवारको खानेपानीको स्रोत कुन हो ?</th>
            <th>तपाइको घरमा शौचालय ?</th>
            <th>तपाई परिवारले प्रयोग गर्ने शौचालय कस्तो छ ?</th>
            <th>तपाईको घरमा बिजूली जडान छ ?</th>
            <th>तपाईको घरमा खाना पकाउन प्रयोग हुने इन्धन कुन हो?</th>
            <th>तपाईको घरमा कस्तो प्रकारको चूल्हो प्रयोग गर्नुहुन्छ ?</th>
            <th>तपाईको घरमा यातायातको साधन छ कि छैन ?</th>
            <th>तपाईको घरमा संचारका साधनहरु के के छन् ?</th>
            <th>तपाईको परिवार कुनै गुठीमाआवद्व हनुहुन्छ ?</th>
            <th>तपाइको घर नजिक प्राकृतिक प्रकोपको सम्भावनाछ कि छैन ?</th>
            <th>तपाईको घरबाट निस्केको फोहोर मैला कहाँ / कसरी व्यवस्थापन गर्नुहुन्छ ?</th>
            <th>_जी.पी. यस_latitude</th>
            <th>_जी.पी. यस_longitude</th>
            <th>Delete</th>
            <th>Update</th>

        </tr>
    </thead>
    <tbody>
        <tr>

            <?php
            // include 'formdata/connect.php';
            // $q = "SELECT * FROM form_data ";

            // $query = mysqli_query($conn, $q);
            // $result = mysqli_fetch_array($query);
            // // // while ($res = mysqli_fetch_array($query)) {
            // foreach ($query as $key => $res) {

            include 'formdata/connect.php';
            $q = "SELECT * FROM form_data LIMIT $offset, $recordsPerPage";
            $query = mysqli_query($conn, $q);
            foreach ($query as $key => $res) {

            ?>
                
                <td><?php echo $initialSN + $key; ?></td>
                <td><?php echo $res["ward_number"]; ?></td>
                <td><?php echo $res["full_name"]; ?></td>
                <td><?php echo $res["head_of_household_name"]; ?></td>
                <td><?php echo $res["gender"]; ?></td>
                <td><?php echo $res["male_count"]; ?></td>
                <td><?php echo $res["female_count"]; ?></td>
                <td><?php echo $res["total_population"]; ?></td>
                <td><?php echo $res["eligible_voters"]; ?></td>
                <td><?php echo $res["ethnicity"]; ?></td>
                <td><?php echo $res["religion"]; ?></td>
                <td><?php echo $res["language_used"]; ?></td>
                <td><?php echo $res["marital_status"]; ?></td>
                <td><?php echo $res["ownership_status"]; ?></td>
                <td><?php echo $res["compliant_to_municipality_standards"]; ?></td>
                <td><?php echo $res["registration_status"]; ?></td>
                <td><?php echo $res["house_type"]; ?></td>
                <td><?php echo $res["number_of_floors"]; ?></td>
                <td><?php echo $res["anyone_renting_at_home"]; ?></td>
                <td><?php echo $res["land_area_owned"]; ?></td>
                <td><?php echo $res["monthly_family_income"]; ?></td>
                <td><?php echo $res["annual_child_births"]; ?></td>
                <td><?php echo $res["months_of_food_sufficiency"] ?></td>
                <td><?php echo $res["presence_of_livestock"]; ?></td>
                <td><?php echo $res["unemployed_person_in_family"]; ?></td>
                <td><?php echo $res["engaged_in_any_business"]; ?></td>
                <td><?php echo $res["family_members_working_abroad"]; ?></td>
                <td><?php echo $res["presence_of_children"]; ?></td>
                <td><?php echo $res["where_children_study"]; ?></td>
                <td><?php echo $res["malnourished_children_count"]; ?></td>
                <td><?php echo $res["differently_abled_person_present"]; ?></td>
                <td><?php echo $res["member_with_serious_illness"]; ?></td>
                <td><?php echo $res["minors_sent_out_of_home"]; ?></td>
                <td><?php echo $res["awareness_of_child_rights"]; ?></td>
                <td><?php echo $res["awareness_of_child_labor_issues"]; ?></td>
                <td><?php echo $res["awareness_of_child_abuse"]; ?></td>
                <td><?php echo $res["birth_certificates_for_children"]; ?></td>
                <td><?php echo $res["out_of_school_children_count"]; ?></td>
                <td><?php echo $res["dropping_out_of_school"]; ?></td>
                <td><?php echo $res["source_of_drinking_water"]; ?></td>
                <td><?php echo $res["toilet_facility"]; ?></td>
                <td><?php echo $res["type_of_toilet_facility"]; ?></td>
                <td><?php echo $res["electricity_connection"]; ?></td>
                <td><?php echo $res["cooking_fuel_source"]; ?></td>
                <td><?php echo $res["cooking_stove_type"]; ?></td>
                <td><?php echo $res["transportation_facility"]; ?></td>
                <td><?php echo $res["communication_facilities"]; ?></td>
                <td><?php echo $res["presence_of_community_forest"]; ?></td>
                <td><?php echo $res["natural_disaster_vulnerability"]; ?></td>
                <td><?php echo $res["waste_disposal_method"]; ?></td>
                <td><?php echo $res["latitude"]; ?></td>
                <td><?php echo $res["longitude"]; ?></td>
                <td>

                    <a class="btn btn-danger" href="formdata/delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a>

                </td>
                <td>
                    <a class="btn btn-primary" href="update.php?id=<?php echo $res['id']; ?>">Update</a>

                </td>
        </tr>
    <?php
            }
    ?>

    </tbody>

</table>



<a href="list.php">
    <button id="row" class="btn btn-success">Add New Data</button>
</a>

<div class="pagination">
    <?php
    $totalRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM form_data"));
    $totalPages = ceil($totalRows / $recordsPerPage);

    if ($currentPage > 1) {
        $prevPage = $currentPage - 1;
        echo '<a href="?page=' . $prevPage . '">Previous</a>';
    }

    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $currentPage) {
            echo '<a href="?page=' . $i . '" class="current">' . $i . '</a>';
        } else {
            echo '<a href="?page=' . $i . '">' . $i . '</a>';
        }
    }

    if ($currentPage < $totalPages) {
        $nextPage = $currentPage + 1;
        echo '<a href="?page=' . $nextPage . '">Next</a>';
    }
    ?>
</div>
</div>


<!-- <button onclick="removeRow(this)" class="delete-row-button">Delete</button>

<button class="update-row-button" onclick="updateRow(this)">Update</button>  -->



<?php include("footer.php"); ?>