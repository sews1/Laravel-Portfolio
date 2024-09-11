<div class="container my-5">
    <div id="skillsSection" class="text-center">
        <h2 class="mb-4">My Skills</h2>
        <div class="row justify-content-center">
            @foreach ($skill as $item)
                <div class="col-md-3 mb-4" style="animation: fadeIn 2s ease-out;">
                    <div class="text-center" 
                        style="border: 1px solid #ddd; 
                               box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
                               padding: 1rem; 
                               border-radius: 8px; 
                               background-color: white;">
                        <i class="{{ $item->icon }}" 
                           style="font-size: 3rem; color: #007bff; margin-bottom: 0.5rem;"></i>
                        <h5 class="text-primary" style="font-weight: 700; color: #007bff;">
                            {{ $item->title }}
                        </h5>
                        <p style="color: #555;">
                            {{ $item->desc }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
