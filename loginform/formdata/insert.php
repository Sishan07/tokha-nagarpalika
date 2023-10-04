<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $field_mapping = array(
        "ward_number" => "ward_number",
        "full_name" => "full_name",
        "head_of_household_name" => "head_of_household_name",
        "gender" => "gender",
        "male_count" => "male_count",
        "female_count" => "female_count",
        "total_population" => "total_population",
        "eligible_voters" => "eligible_voters",
        "ethnicity" => "ethnicity",
        "religion" => "religion",
        "language_used" => "language_used",
        "marital_status" => "marital_status",
        "ownership_status" => "ownership_status",
        "compliant_to_municipality_standards" => "compliant_to_municipality_standards",
        "registration_status" => "registration_status",
        "house_type" => "house_type",
        "number_of_floors" => "number_of_floors",
        "anyone_renting_at_home" => "anyone_renting_at_home",
        "land_area_owned" => "land_area_owned",
        "monthly_family_income" => "monthly_family_income",
        "annual_child_births" => "annual_child_births",
        "months_of_food_sufficiency" => "months_of_food_sufficiency",
        "presence_of_livestock" => "presence_of_livestock",
        "unemployed_person_in_family" => "unemployed_person_in_family",
        "engaged_in_any_business" => "engaged_in_any_business",
        "family_members_working_abroad" => "family_members_working_abroad",
        "presence_of_children" => "presence_of_children",
        "where_children_study" => "where_children_study",
        "malnourished_children_count" => "malnourished_children_count",
        "differently_abled_person_present" => "differently_abled_person_present",
        "member_with_serious_illness" => "member_with_serious_illness",
        "minors_sent_out_of_home" => "minors_sent_out_of_home",
        "awareness_of_child_rights" => "awareness_of_child_rights",
        "awareness_of_child_labor_issues" => "awareness_of_child_labor_issues",
        "awareness_of_child_abuse" => "awareness_of_child_abuse",
        "birth_certificates_for_children" => "birth_certificates_for_children",
        "out_of_school_children_count" => "out_of_school_children_count",
        "dropping_out_of_school" => "dropping_out_of_school",
        "source_of_drinking_water" => "source_of_drinking_water",
        "toilet_facility" => "toilet_facility",
        "type_of_toilet_facility" => "type_of_toilet_facility",
        "electricity_connection" => "electricity_connection",
        "cooking_fuel_source" => "cooking_fuel_source",
        "cooking_stove_type" => "cooking_stove_type",
        "transportation_facility" => "transportation_facility",
        "communication_facilities" => "communication_facilities",
        "presence_of_community_forest" => "presence_of_community_forest",
        "natural_disaster_vulnerability" => "natural_disaster_vulnerability",
        "waste_disposal_method" => "waste_disposal_method",
        "latitude" => "latitude",
        "longitude" => "longitude"
       
    );

    $columns = implode(", ", array_values($field_mapping));
    $values = implode(", ", array_fill(0, count($field_mapping), "?"));
    $sql = "INSERT INTO form_data ($columns) VALUES ($values)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Dynamically bind the parameters
        $paramTypes = str_repeat("s", count($field_mapping));
        $params = array();

        foreach ($field_mapping as $fieldName => $dbFieldName) {
            $params[] = &$_POST[$fieldName];
        }

        array_unshift($params, $paramTypes);
        call_user_func_array(array($stmt, 'bind_param'), $params);

        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            die("Error executing the statement: " . $stmt->error);
        }

        $stmt->close();
    } else {
        die("Error preparing the statement: " . $conn->error);
    }
}
