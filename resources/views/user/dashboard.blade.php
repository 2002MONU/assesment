<!doctype html>
<html lang="en" data-bs-theme="dark">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Login</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/coinex.min862f.css?v=4.1.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.min862f.css?v=4.1.0') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">
</head>

<body class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <div class="container-fluid content-inner pb-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between border-0 m-3">
                        <div class="header-title ">
                            <h4 class="card-title">User Details </h4>
                        </div>
                        @if (Session('success'))
                            <span class="alert alert-success" role="alert">{{ session('success') }}</span>
                        @endif
                        @if (Session('error'))
                            <span class="alert alert-danger" role="alert">{{ session('error') }}</span>
                        @endif
                        <div class="header-title">
                            <form method="GET" action="{{ route('user-dashboard') }}">
                                <!-- Replace your_route_name -->
                                <input type="text" name="search" id="search" class="form-control"
                                    placeholder="Author, City" value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>

                        <div class="header-title ">
                            {{-- <a href="{{route('admin.add-author')}}" class="btn btn-success">Add Author</a> --}}
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div id="search_list"> </div>

                            @if ($query->count() > 0)
                                <table id="basic-table" class="table table-striped table-shadow mb-0" role="grid">
                                    <thead class="border-0">
                                        <tr>
                                            <th>ID</th>
                                            <th>Book Name</th>
                                            <th>Author Name</th>
                                            <th>Title</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->book_name }}</td>
                                                <td>{{ $user->author_name }}</td>
                                                <td>{{ $user->title }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#feedbackModal"
                                                    data-book="{{ $user->book_name }}" data-author="{{ $user->author_name }}">
                                                Give Feedback
                                            </button>
                                            
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $users->appends(['search' => request('search')])->links() !!}
                            @else
                                <div class="text-center p-3">
                                    <h5 class="text-muted">No records found</h5>
                                </div>
                            @endif
                        </div>
                    </div><!-- Feedback Modal -->
                    <!-- Feedback Modal -->
                    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="feedbackModalLabel">Feedback</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Feedback Form -->
                                    <form action="{{ route('submit.feedback') }}" method="POST">
                                        @csrf

                                        <!-- Star Rating -->
                                        <div class="rating">
                                            <span class="star" data-index="1">&#9733;</span>
                                            <span class="star" data-index="2">&#9733;</span>
                                            <span class="star" data-index="3">&#9733;</span>
                                            <span class="star" data-index="4">&#9733;</span>
                                            <span class="star" data-index="5">&#9733;</span>
                                        </div>
                                        <input type="hidden" name="rating" id="rating" value="">

                                        <!-- Hidden fields for book name and author name -->
                                        <input type="hidden" name="book_name" id="book_name" value="">
                                        <input type="hidden" name="author_name" id="author_name" value="">

                                        <!-- Feedback Text Area -->
                                        <div class="form-group mt-3">
                                            <label for="feedback">Your Feedback</label>
                                            <textarea id="feedback" name="feedback" class="form-control" rows="4"
                                                placeholder="Write your feedback here..."></textarea>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    


                </div>
            </div>




            <!-- Backend Bundle JavaScript -->
            <script src="{{ asset('assets/js/core/libs.min.js') }}"></script>
            <script src="{{ asset('assets/js/core/external.min.js') }}"></script>

            <!-- widgetchart JavaScript -->
            <script src="{{ asset('assets/js/charts/widgetcharts.js') }}"></script>

            <!-- GSAP Animation JS-->
            <script src="{{ asset('assets/vendor/gsap/gsap.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>

            <!-- fslightbox JavaScript -->
            <script src="{{ asset('assets/js/fslightbox.js') }}"></script>

            <!-- Mapchart JavaScript -->
            <script src="{{ asset('assets/js/charts/vector-chart.js') }}"></script>
            <script src="{{ asset('assets/js/charts/dashboard.js') }}"></script>

            <!-- app JavaScript -->
            <script src="{{ asset('assets/js/coinex.js') }}"></script>

            <!-- apexchart JavaScript -->
            <script src="{{ asset('assets/js/charts/apexcharts.js') }}"></script>

            <!-- Gsap Animation Init -->
            <script src="{{ asset('assets/js/gsap.js') }}"></script>
</body>
<style>
    /* Style for the stars */
    .rating {
        display: flex;
    }

    .star {
        font-size: 40px;
        cursor: pointer;
        color: #ccc;
        /* Default gray */
        transition: color 0.3s ease;
    }

    .star.selected {
        color: yellow;
        /* Yellow color for selected stars */
    }
</style>
<script>
   $(document).ready(function() {
    var ratingValue = 0;

    // When a star is clicked
    $('.star').click(function() {
        // Get the clicked star's index (1-5)
        ratingValue = $(this).data('index');

        // Update the hidden rating field with the selected value
        $('#rating').val(ratingValue);

        // Highlight the stars
        updateStars(ratingValue);
    });

    // Function to update the stars
    function updateStars(rating) {
        $('.star').removeClass('selected');
        for (var i = 1; i <= rating; i++) {
            $('.star[data-index="' + i + '"]').addClass('selected');
        }
    }

    // Set book name and author name when the modal is opened
    $('#feedbackModal').on('show.bs.modal', function(e) {
        var button = $(e.relatedTarget); // Button that triggered the modal
        var bookName = button.data('book');
        var authorName = button.data('author');

        // Set the values in the hidden fields
        $('#book_name').val(bookName);
        $('#author_name').val(authorName);
    });
});

</script>

</html>
