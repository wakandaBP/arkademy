<?php 

echo profile("Felix",23);

/* -------------------------------FUNCTION PROFILE---------------------------------*/ 

function profile($name, $age){
    $hobbies = array("Playing Music", "Watching any movie","Eat");
    $list_school = array("name"=>"STMIK IBBI","year_in"=>"2015","year_out"=>"2019");
    $skills = array(
                array(
                    "name"=>"PHP",
                    "level"=>"Intermediate",
                ),
                array(
                    "name"=>"Jquery",
                    "level"=>"Beginner",
                ),
                array(
                    "name"=>"Guitar",
                    "level"=>"Intermediate",
                ),
                array(
                    "name"=>"PHP",
                    "level"=>"Intermediate",
                )
            );

    $data = array(
        "name"=>$name,
        "age"=>$age,
        "address"=>"DUSUN I JL KARYA IV",
        "hobbies"=>$hobbies,
        "is_married"=>false,
        "list_school"=>$list_school,
        "skills"=>$skills,
        "interest_in_coding"=>true
    );


    return json_encode($data);
}