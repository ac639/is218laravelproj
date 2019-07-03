@extends('layouts.content')
@section('content')


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">Home Page</h1>


                <hr>



                <!-- Post Content -->
                <p class="lead">This is an example home page for IS218 'Installing Laravel' assignment
                </p>

                <p> This site is hosted as a Heroku app using Laravel framework with bootstrap theme

                </p>




                <!-- Comments Form -->
                <div class="card my-4">
                    <h5 class="card-header">Leave a Comment:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>



            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
