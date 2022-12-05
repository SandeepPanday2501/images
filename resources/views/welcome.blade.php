<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card mt-3">
                    <div class="card-header">
                        <h5>Upload Image</h5>

                    </div>
                    <div class="card-body">
                        <form action="{{route('imageUpload')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image-upload" class="forma-control">
                            <buttom type="submit" class="btn btn-primary mt-2">Upload</buttom>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>