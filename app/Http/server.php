<!--Model-->
<?php

class Parkhere {
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function addParking($data) {
    $owner_name = $data['owner_name'];
    $owner_mobile = $data['owner_mobile'];
    $security_number = $data['sequrity_number'];
    $division = $data['division'];
    $locality = $data['local'];
    $allow_bike = $data['bike'];
    $total_slot_bike = $data['total_slot_bike'];
    $allow_car = $data['car'];
    $total_slot_car = $data['total_slot_car'];
    $allow_bicycle = $data['bycycle'];
    $allow_monthly = $data['monthly'];
    $monthly_cost = $data['monthly_cost'];
    $allow_hourly = $data['hourly'];
    $start_time = $data['start_time'];
    $end_time = $data['end_time'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $cctv = $data['cctv'];
    $guard = $data['guard'];
    $indoor = $data['indoor'];
    $place_cat=$data['place_cat'];

    // Form validation: ensure that the form is correctly filled ...
    // By adding (array_push()) corresponding error unto $errors array
    $errors = array();
    if (empty($owner_name)) { array_push($errors, "required"); }
    if (empty($owner_mobile)) { array_push($errors, "required"); }
    if (empty($security_number)) { array_push($errors, "required"); }
    if (empty($division)) { array_push($errors, "required"); }
    if (empty($locality)) { array_push($errors, "required"); }
    if (empty($allow_bike)) { array_push($errors, "required"); }
    if (empty($total_slot_bike)) { array_push($errors, "required"); }
    if (empty($allow_car)) { array_push($errors, "required"); }
    if (empty($total_slot_car)) { array_push($errors, "required"); }
    if (empty($allow_bicycle)) { array_push($errors, "required"); }
    if (empty($allow_monthly)) { array_push($errors, "required"); }
    if (empty($monthly_cost)) { array_push($errors, "required"); }
    if (empty($allow_hourly)) { array_push($errors, "required"); }
    if (empty($start_time)) { array_push($errors, "required"); }
    if (empty($end_time)) { array_push($errors, "required"); }

    // Insert data into database if there are no errors in the form
    if (count($errors) == 0) {
      $sql = "INSERT INTO list_parking (owner_name, owner_mobile, security_number, division, locality, allow_bike, total_slot_bike, allow_car, total_slot_car, allow_bicycle, allow_monthly, monthly_cost, allow_hourly, start_time, end_time, cctv, guard, indoor, image, place_cat)
              VALUES ('$owner_name', '$owner_mobile', '$security_number', '$division', '$locality', '$allow_bike', '$total_slot_bike', '$allow_car', '$total_slot_car', '$allow_bicycle', '$allow_monthly', '$monthly_cost', '$allow_hourly', '$start_time', '$end_time', '$cctv', '$guard', '$indoor', '$image', '$place_cat')";
                // Execute the query
  if (mysqli_query($conn, $sql)) {
    $success_message = "Parking spot has been added successfully.";
  } else {
    array_push($errors, "Error: " . mysqli_error($conn));
  }
}
}
mysqli_close($conn);
}
