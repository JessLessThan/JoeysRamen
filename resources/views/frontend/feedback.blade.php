<x-user-view-layout>
    <div class="text-center container rounded-1 mt-5 bg-white">
        <div class="row">
            <h2 class="text-start fw-bold px-3 bg-dark py-3 text-white">Give Feedback</h2>
            <div class="col">
    
                <p class="px-2 text-start text-black">
                    At Joey's Ramen House, your feedback helps us serve you better. Let us know how we can improve your dining experience and make your next visit even more enjoyable.
                </p>
    
                <div class="px-2 text-start py-1">
                    <form method="POST" action="{{ route('feedback.store') }}">
                        @csrf
                        <label class="fw-bold fs-4">Rate Us:</label>
                        <div class="star-rating d-flex flex-row-reverse">
                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5" title="5 stars">&#9733;</label>
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4" title="4 stars">&#9733;</label>
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3" title="3 stars">&#9733;</label>
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2" title="2 stars">&#9733;</label>
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1" title="1 star">&#9733;</label>
                        </div>
                    
                        <label class="fw-bold fs-4">Feedback:</label>
                        <textarea name="feedback" class="form-control" rows="5"></textarea>
                        <div class="d-flex flex-row gap-2 mt-3 mb-2">
                            @if (Auth::check())
                                <!-- Show Submit button for authenticated users -->
                                <button type="submit" class="btn btn-success px-5 border py-2">Submit</button>
                            @else
                                <!-- Show Login button for unauthenticated users -->
                                <a href="{{ route('login') }}" class="btn btn-primary px-5 border py-2">Login</a>
                            @endif
                        </div>
                        
                       
                    </form>
                </div>
    
            </div>
        </div>
    </div>
    
    <style>
     .star-rating {
    direction: rtl; /* Ensures stars are filled from right to left */
}

.star-rating input[type="radio"] {
    display: none; /* Hide radio buttons */
}

.star-rating label {
    font-size: 3rem; /* Increase the size of the stars */
    color: #ddd;
    cursor: pointer;
}

.star-rating label:hover,
.star-rating label:hover ~ label,
.star-rating input[type="radio"]:checked ~ label {
    color: #ffc107; /* Highlighted star color */
}

/* Ensure textarea and other text inputs follow left-to-right */
textarea, .form-control {
    direction: ltr; /* Force left-to-right text direction */
}

    </style>
    
    
</x-user-view-layout>