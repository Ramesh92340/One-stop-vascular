<?php
// Database connection (replace with your actual database connection details)
include '../../db.connection/db_connection.php';

// Get blog ID from URL
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($blog_id > 0) {
    // Fetch blog data
    $stmt = $conn->prepare("SELECT title, main_content, full_content FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $stmt->bind_result($title, $main_content, $full_content);
    $stmt->fetch();
    $stmt->close();
} else {
    echo "Invalid blog ID.";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>One-Stop-Vascular - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <?php include 'navbar.php'; ?>
                <!-- End of Topbar -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit BLOG</h1>
                    </div>
                    <div class="row">
                        <div class="col-xl-11">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-success">EDIT CONTENT</h6>
                                </div>
                                <div class="card-body">
                                    <form style='color:black;' id="editblogform" action="addBlog.php" method="POST" enctype="multipart/form-data">
                                        <!-- Title Image Upload -->
                                        <div class="mb-3">
                                            <label for="formFileMultiple1" class="form-label text-primary my-2">CHOOSE TITLE IMAGE</label>
                                            <input class="form-control" name="photos[]" type="file" id="formFileMultiple" multiple>
                                        </div>
                                        <!-- Title Input -->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label text-primary">ENTER TITLE</label>
                                            <input type="text" class="form-control text-grey-900" name='title' id="exampleFormControlInput1" value="<?php echo htmlspecialchars($title); ?>" placeholder="Title" required>
                                        </div>
                                        <!-- Main Content Input -->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label text-primary">ENTER MAIN CONTENT</label>
                                            <input type="text" class="form-control text-grey-900" name='main_content' id="exampleFormControlInput1" value="<?php echo htmlspecialchars($main_content); ?>" placeholder="Main content" required>
                                        </div>
                                        <!-- Multiple Photos Upload -->
                                        <div class="mb-3">
                                            <label for="formFileMultiple" class="form-label text-primary my-2">Choose Photos (you can choose multiple photos)</label>
                                            <input class="form-control" name="photos[]" type="file" id="formFileMultiple" multiple>
                                        </div>
                                        <!-- Quill Editor for Full Content -->
                                        <label for="exampleFormControlInput1" class="form-label text-primary">ENTER FULL CONTENT</label>
                                        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
                                        <div id="editor" style='height:200px;'>
                                            <?php echo htmlspecialchars($full_content); ?>
                                        </div>
                                        <input name="full_content" id="formcontentdata" style="display: none">
                                        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
                                        <script>
                                            const quill = new Quill('#editor', {
                                                theme: 'snow'
                                            });
                                            // Load initial content into the editor
                                            quill.root.innerHTML = <?php echo json_encode($full_content); ?>;
                                            document.querySelector('#editblogform').onsubmit = function() {
                                                document.querySelector('#formcontentdata').value = quill.getSemanticHTML();
                                            };
                                        </script>
                                        <!-- Hidden Input for Blog ID -->
                                        <input type="hidden" name="id" value="<?php echo $blog_id; ?>">
                                        <!-- Form Buttons -->
                                        <div class='row p-3'>
                                            <div class='col-xl-7 col-sm-2'></div>
                                            <button type='reset' class='btn btn-danger mx-1 my-2 col-xl-2'>Clear</button>
                                            <button type='submit' class='btn btn-success mx-1 my-2 col-xl-2'>Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <!-- End of Footer -->
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
