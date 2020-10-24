<?php
require_once "db.php";


if (isset($_POST['submit'])) {
    $company = $_POST['company'];
    $title = $_POST['title'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $summary = $_POST['summary'];
    $requirement = $_POST['requirement'];
    $expertise = $_POST['expertise'];
    $advantageous = $_POST['advantageous'];
    $deadline = $_POST['deadline'];
    $jobtype = $_POST['job-type'];
    $experience = $_POST["experience"];
    $remotely = $_POST['remotely'];

    if (empty($company) && empty($title) && empty($address) && empty($salary) && empty($summary) && empty($requirement) && empty($expertise) && empty($advantageous) && empty($deadline) && empty($jobtype) && empty($education) && empty($remotely)) {
        header("Location: ../post-job.php?error=emptyfield");
    } else {
        $sql = "INSERT INTO detail (company, title, company_location, salary, summary, requirement, expertise, advantageous, deadline, jobtype, experience, education, remotely) VALUES ('$company', '$title', '$address', '$salary', '$summary', '$requirement', '$expertise', '$advantageous', '$deadline', '$jobtype', '$experience', '$education', '$remotely')";

        if (mysqli_query($conn, $sql)) {
            $msg = "inserted successfully";
        } else {
            echo "error:" . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);

        header("Location: ../post-job.php?success=complete");
    }
}
