<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}

include("formdata/connect.php");

if (isset($_GET['query'])) {
    $query = $_GET['query'];
 
    //columns to search

    $columnToSearch = [
        'ward_number',
        'full_name',
        'head_of_household_name',
        'gender',
        'male_count',
        'female_count',
        'total_population',
        'eligible_voters',
        'ethnicity',
        'religion',
        'language_used',
        'marital_status',
        'ownership_status',
        'compliant_to_municipality_standards',
        'registration_status',
        'house_type',
        'number_of_floors',
        'anyone_renting_at_home',
        'land_area_owned',
        'monthly_family_income',
        'annual_child_births',
        'months_of_food_sufficiency',
        'presence_of_livestock',
        'unemployed_person_in_family',
        'engaged_in_any_business',
        'family_members_working_abroad',
        'presence_of_children',
        'where_children_study',
        'malnourished_children_count',
        'differently_abled_person_present',
        'member_with_serious_illness',
        'minors_sent_out_of_home',
        'awareness_of_child_rights',
        'awareness_of_child_labor_issues',
        'awareness_of_child_abuse',
        'birth_certificates_for_children',
        'out_of_school_children_count',
        'dropping_out_of_school',
        'source_of_drinking_water',
        'toilet_facility',
        'type_of_toilet_facility',
        'electricity_connection',
        'cooking_fuel_source',
        'cooking_stove_type',
        'transportation_facility',
        'communication_facilities',
        'presence_of_community_forest',
        'natural_disaster_vulnerability',
        'waste_disposal_method',
        'latitude',
        'longitude',
    ];

    $searchConditions = [];

    foreach ($columnToSearch as $column) {
        $searchConditions[] = "$column LIKE '%$query%'";
    }

    $searchSQL = "SELECT * FROM form_data WHERE " . implode(' OR ', $searchConditions);
    
    $searchResult = mysqli_query($conn, $searchSQL);

    if ($searchResult) {
        if (mysqli_num_rows($searchResult) > 0) {
            foreach ($searchResult as $key => $res) {
            echo "<tr>";
            echo "<td>" . ($initialSN + $key) . "</td>";
            echo "<td>" . $res["ward_number"] . "</td>";
            echo "<td>" . $res["full_name"] . "</td>";
            echo "<td>" . $res["head_of_household_name"] . "</td>";
            echo "<td>" . $res["gender"] . "</td>";
            echo "<td>" . $res["male_count"] . "</td>";
            echo "<td>" . $res["female_count"] . "</td>";
            echo "<td>" . $res["total_population"] . "</td>";
            echo "<td>" . $res["eligible_voters"] . "</td>";
            echo "<td>" . $res["ethnicity"] . "</td>";
            echo "<td>" . $res["religion"] . "</td>";
            echo "<td>" . $res["language_used"] . "</td>";
            echo "<td>" . $res["marital_status"] . "</td>";
            echo "<td>" . $res["ownership_status"] . "</td>";
            echo "<td>" . $res["compliant_to_municipality_standards"] . "</td>";
            echo "<td>" . $res["registration_status"] . "</td>";
            echo "<td>" . $res["house_type"] . "</td>";
            echo "<td>" . $res["number_of_floors"] . "</td>";
            echo "<td>" . $res["anyone_renting_at_home"] . "</td>";
            echo "<td>" . $res["land_area_owned"] . "</td>";
            echo "<td>" . $res["monthly_family_income"] . "</td>";
            echo "<td>" . $res["annual_child_births"] . "</td>";
            echo "<td>" . $res["months_of_food_sufficiency"] . "</td>";
            echo "<td>" . $res["presence_of_livestock"] . "</td>";
            echo "<td>" . $res["unemployed_person_in_family"] . "</td>";
            echo "<td>" . $res["engaged_in_any_business"] . "</td>";
            echo "<td>" . $res["family_members_working_abroad"] . "</td>";
            echo "<td>" . $res["presence_of_children"] . "</td>";
            echo "<td>" . $res["where_children_study"] . "</td>";
            echo "<td>" . $res["malnourished_children_count"] . "</td>";
            echo "<td>" . $res["differently_abled_person_present"] . "</td>";
            echo "<td>" . $res["member_with_serious_illness"] . "</td>";
            echo "<td>" . $res["minors_sent_out_of_home"] . "</td>";
            echo "<td>" . $res["awareness_of_child_rights"] . "</td>";
            echo "<td>" . $res["awareness_of_child_labor_issues"] . "</td>";
            echo "<td>" . $res["awareness_of_child_abuse"] . "</td>";
            echo "<td>" . $res["birth_certificates_for_children"] . "</td>";
            echo "<td>" . $res["out_of_school_children_count"] . "</td>";
            echo "<td>" . $res["dropping_out_of_school"] . "</td>";
            echo "<td>" . $res["source_of_drinking_water"] . "</td>";
            echo "<td>" . $res["toilet_facility"] . "</td>";
            echo "<td>" . $res["type_of_toilet_facility"] . "</td>";
            echo "<td>" . $res["electricity_connection"] . "</td>";
            echo "<td>" . $res["cooking_fuel_source"] . "</td>";
            echo "<td>" . $res["cooking_stove_type"] . "</td>";
            echo "<td>" . $res["transportation_facility"] . "</td>";
            echo "<td>" . $res["communication_facilities"] . "</td>";
            echo "<td>" . $res["presence_of_community_forest"] . "</td>";
            echo "<td>" . $res["natural_disaster_vulnerability"] . "</td>";
            echo "<td>" . $res["waste_disposal_method"] . "</td>";
            echo "<td>" . $res["latitude"] . "</td>";
            echo "<td>" . $res["longitude"] . "</td>";
            echo "<td>";
            echo '<a class="btn btn-danger" href="formdata/delete.php?id=' . $res['id'] . '" class="text-white">Delete</a>';
            echo "</td>";
            echo "<td>";
            echo '<a class="btn btn-primary" href="update.php?id=' . $res['id'] . '">Update</a>';
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='39'>No results found.</td></tr>";
    }
}
}
?>