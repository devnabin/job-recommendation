<!DOCTYPE html>
<html>

<head>
    <title>Similarity Calculation</title>
</head>

<body>
    <h1>Similarity Calculation</h1>
    <?php
    // Job posting vector
    $job_posting_vector = array(
        'job_title' => 'Software Engineer',
        'required_skills' => 'PHP, MySQL, HTML, CSS, JavaScript',
        'required_experience' => '3-5 years',
        'job_location' => 'San Francisco, CA',
        'salary' => '$100,000 - $120,000',
    );

    // Job seeker profile vector
    $job_seeker_profile_vector = array(
        'skills' => 'PHP, MySQL, HTML, CSS, JavaScript, Python',
        'education' => 'Bachelor of Science in Computer Science',
        'work_experience' => '5 years',
        'location' => 'San Francisco, CA',
    );

    // Calculate the dot product
    $dot_product = 0;
    foreach ($job_posting_vector as $feature => $value) {
        if (isset($job_seeker_profile_vector[$feature])) {
            $dot_product += floatval($value) * floatval($job_seeker_profile_vector[$feature]);
        }
    }

    // Calculate the Euclidean norms
    $job_posting_norm = 0;
    $job_seeker_norm = 0;
    foreach ($job_posting_vector as $feature => $value) {
        $job_posting_norm += pow(floatval($value), 2);
    }
    foreach ($job_seeker_profile_vector as $feature => $value) {
        $job_seeker_norm += pow(floatval($value), 2);
    }
    $job_posting_norm = sqrt($job_posting_norm);
    $job_seeker_norm = sqrt($job_seeker_norm);

    // Calculate the cosine similarity
    if ($job_posting_norm == 0 || $job_seeker_norm == 0) {
        $cosine_similarity = 0;
    } else {
        $cosine_similarity = $dot_product / ($job_posting_norm * $job_seeker_norm);
    }

    // Output the cosine similarity score
    if (isset($cosine_similarity)) {
        echo "Cosine similarity score: " . $cosine_similarity;
    } else {
        echo "Error: cosine similarity could not be calculated";
    }
    ?>


</body>

</html>