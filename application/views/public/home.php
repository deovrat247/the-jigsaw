<!-- Language Selector -->
<div class="bg-light py-2">
    <div class="container">
        <div class="d-flex justify-content-end">
            <a href="http://www.thejigsaw.in/" class="btn btn-outline-primary me-2">English</a>
            <a href="http://www.thejigsaw.in/home-hindi" class="btn btn-outline-primary">Hindi</a>
        </div>
    </div>
</div>

<!-- Hero Video Grid -->
<div class="container py-5">
    <div class="row g-4">
        <?php
        $videos = [
            'JEI1iv2KZRc',
            'TuV9_E3GMCU',
            'QYmWHj7BuHk',
            'OS6O0cW87-I'
        ];
        foreach($videos as $index => $videoId): ?>
            <div class="col-md-3 col-sm-6">
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/<?php echo $videoId; ?>"
                        title="Video <?php echo $index + 1; ?>"
                        allowfullscreen
                        class="border-0">
                    </iframe>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Main Content -->
<div class="container py-5">
    <header class="text-center mb-5">
        <h1 class="display-4 mb-4">Corporate Video Production Company Mumbai</h1>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p class="lead text-muted">
                    We are a 360-degree video production company based in Mumbai, passionate about our role as one of the best 
                    <a href="https://web.archive.org/web/20220708051940/https://www.thejigsaw.in/blog/top-10-corporate-film-makers-in-mumbai" 
                       class="text-decoration-none">corporate video makers</a>.
                </p>
            </div>
        </div>
    </header>

    <!-- Content Sections -->
    <div class="row g-5">
        <?php
        $sections = [
            [
                'image' => 'assets/images/corporate-video-production.jpg',
                'alt' => 'Video Makers in Mumbai',
                'text' => 'We believe in telling compelling stories through corporate films, product demo videos, and advertisement films...'
            ],
            // Add other sections similarly
        ];
        
        foreach($sections as $section): ?>
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <img src="<?php echo $section['image']; ?>" 
                         class="card-img-top" 
                         alt="<?php echo $section['alt']; ?>">
                    <div class="card-body">
                        <p class="card-text"><?php echo $section['text']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Services Grid -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body">
                        <i class="im im-icon-File-Video display-4 text-primary mb-3"></i>
                        <h3 class="h4">CORPORATE VIDEO</h3>
                        <p class="text-muted">About ninety percent of internet traffic will comprise video by next year.</p>
                    </div>
                </div>
            </div>
            <!-- Repeat for other services -->
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">From The Blog</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($articles as $article): ?>
            <div class="col">
                <div class="card h-100 border-0 shadow-sm hover-shadow">
                    <img src="<?php echo $article->image_path; ?>" 
                         class="card-img-top" 
                         alt="<?php echo $article->title; ?>">
                    <div class="card-body">
                        <small class="text-muted"><?php echo $article->pubdate; ?></small>
                        <h3 class="h5 mt-2">
                            <a href="<?php echo 'https://www.thejigsaw.in/blog/' . $article->slug; ?>" 
                               class="text-decoration-none text-dark">
                                <?php echo $article->title; ?>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="https://www.thejigsaw.in/blog" class="btn btn-outline-primary">View Blog</a>
        </div>
    </div>
</section>

<!-- Client Logo Carousel -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Companies We've Worked With</h2>
        <p class="text-center text-muted small mb-5">
            *All trademarks, service marks, trade names, trade dress, product names, and logos appearing on the site are the property of their respective owners
        </p>
        <div class="logo-slick-carousel">
            <?php
            $clients = ['abbott', 'abec', 'adidas', 'Australiaconsulate', 'bajaj', 'bisleri', 'export4media'];
            foreach($clients as $client): ?>
                <div class="px-4">
                    <img src="<?php echo base_url(); ?>assets/images/client/<?php echo $client; ?>.<?php echo in_array($client, ['abec', 'Australiaconsulate', 'bisleri', 'export4media']) ? 'jpg' : 'png'; ?>"
                         alt="<?php echo $client; ?>"
                         class="img-fluid">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Add custom CSS for hover effects and transitions -->
<style>
.hover-shadow {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
}

.logo-slick-carousel img {
    opacity: 0.7;
    transition: opacity 0.3s ease-in-out;
}

.logo-slick-carousel img:hover {
    opacity: 1;
}
</style>