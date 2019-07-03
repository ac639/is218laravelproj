@extends('layouts.content')
@section('content')


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">About Me</h1>

                <!-- Author -->
                <p class="lead">
                    by
                    <a href="#">Andre Catarino</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p>Posted on July 2, 2019</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="https://www.bsr.org/images/sized/images/heroes/2018-04-16-future-of-internet-power-case-study-hero-900x300.jpg" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">Name: Andre Catarino Major: B.S. Information Technology </p>

                <p>
                    I am studying Information Technology focusing on network security and web development. I am planning to graudate Fall of 2019

                </p>

                <p>
                    This is my second time working with Laravel, I got to play around with Laravel a bit in IS373 as well as Drupal and Wordpress
                </p>

                <hr>

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
@stop