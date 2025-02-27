@extends("layouts._layout")
@section("_body_content")


<section class="container py-4 py-lg-5">
    <div class="row no-gutters">
        <article class="col-12 article-post">    
            <h2 class="fs-h1 mb-4">
                Support
            </h2>
    
            <section class="article-body">
                <p>
                    <strong>Ask everything you’re looking for.</strong>
                </p>

                <p>
                    Got a question? Need help with a problem?<br/>
                    You’re in the right place to find all the ImageGlass customer and technical support you need!
                </p>

                <div class="mt-4">
                    <ul class="row list-support mb-0">
                        <li class="col-sm-6 col-md-4 col-lg-3 mb-3">
                            <a class="eff-reveal-border fs-small" target="_blank" rel="noopener" href="https://groups.google.com/forum/#!forum/imageglass">
                                <span class="eff-reveal">
                                    <span class="item-icon">
                                        <span class="icon-support-user link"></span>
                                    </span>
            
                                    <h3 class="fs-h3 mt-1">For non-technical users</h3>
                                    <p class="mt-1 mb-0">
                                        Use your Google account to follow ImageGlass updates, or ask a question.
                                    </p>
                                </span>
                            </a>
                        </li>

                        <li class="col-sm-6 col-md-4 col-lg-3 mb-3">
                            <a class="eff-reveal-border fs-small" target="_blank" rel="noopener" href="https://github.com/d2phap/ImageGlass/issues">
                                <span class="eff-reveal">
                                    <span class="item-icon">
                                        <span class="icon-support-dev link"></span>
                                    </span>
                                    <h3 class="fs-h3 mt-1">For developers</h3>
                                    <p class="mt-1 mb-0">
                                        Track development progress, leave feedbacks or bugs by Github account.
                                    </p>
                                </span>
                            </a>
                        </li>

                        <li class="col-sm-6 col-md-4 col-lg-3 mb-3">
                            <div class="eff-reveal-border">
                                <span class="eff-reveal p-1">
                                    <iframe src="https://discord.com/widget?id=818852544859209748&theme=dark" width="100%" height="100%" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                                </span>
                            </div>
                        </li>

                        <li class="col-sm-6 col-md-4 col-lg-3 mb-3">
                            <div class="eff-reveal-border">
                                <span class="eff-reveal p-1 d-flex">
                                    @include("shared._ads")
                                </span>
                            </div>
                            
                        </li>
                        
                    </ul>
                </div>

            </section>
        </article>

        <div class="row justify-content-center mt-5">
            <div class="col-xl-8 col-lg-9 col-md-10 text-center">
                @include("shared._donation")
            </div>
        </div>
    </div>
</section>

@stop