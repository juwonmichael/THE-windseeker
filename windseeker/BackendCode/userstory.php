<?php

session_start();
include('connection.php'); // include database connection code

// Function to create a new story
function create_story($title, $content,$image_full_path ) {
    global $conn;
    $sql = "INSERT INTO story (title, content,image) VALUES ('$title', '$content','$image_full_path' )";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
 
}

// Function to edit an existing story
function edit_story($title, $content) {
    global $conn;
    $sql = "UPDATE story SET title='$title', content='$content' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
    
 

}
if(empty($_POST['title'])){
    echo "enter title";

}else{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "welcome";
     
        $target_file = "../UPLOADS/" . basename($_FILES["story-image"]["name"]);
       
    

        $title= $_POST['title'];
         $content= $_POST['content'];
         if(move_uploaded_file($_FILES["story-image"]["tmp_name"], $target_file))
         {
            create_story ($title,$content,$target_file);
            echo "file uploaded sucessfully ";
         }

 
}

  

// Close the database connection
$conn->close();
echo "story created successfully ";

?>
