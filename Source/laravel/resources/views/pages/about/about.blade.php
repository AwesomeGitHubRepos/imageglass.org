@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">

    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            About
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post">
            <p class="intro">
				<img class="avt" src="{{ url('/img/phapavt.png') }}" alt="Duong Dieu Phap">
				<i class="icon-quotes-left"></i> Hello! I am Dương Diệu Pháp, a Vietnamese developer and an enthusiast of web technology and Windows apps. <i class="icon-quotes-right"></i><br/><br/>
			</p>
			<p>
				I am working as Full-stack engineer for <a href="https://github.com/OpenProteinAI" target="_blank" rel="noopener noreferrer" title="Open Protein"><strong>Open Protein</strong></a> — an AI-powered protein optimization platform as a service helping biology scientists to improve optimize protein sequences and prediction.
			</p>
			<p>
				I often develop libraries for web and ImageGlass app in my free time. You can check them in <a href="https://github.com/d2phap" target="blank" rel="noopener noreferrer">my Github page</a>. I will be glad if you can put some stars ⭐.
			</p>
			
			<p>
				<span class="fs-h1">🤗</span>
			</p>


			<div class="personal-info links">
				<h3 class="fs-h3 mt-5 mb-3">📚 Experiences</h3>
				<ul>
					<li><strong>10/2021 - present:</strong> Full-stack engineer at <a target="_blank" rel="noopener noreferrer" href="https://github.com/OpenProteinAI">Open Protein</a></li>
					<li><strong>1/2019 - 9/2021:</strong> Front-end Developer at <a target="_blank" rel="noopener noreferrer" href="https://chainstack.com">Chainstack</a></li>
					<li><strong>11/2017 - 12/2018:</strong> Senior UI/UX Developement Specialist at <a target="_blank" rel="noopener noreferrer" href="https://www.ascentis.com.sg">Ascentis Private Limited</a></li>	
					<li><strong>6/2015 - 11/2017:</strong> Front-end Developer at <a target="_blank" rel="noopener noreferrer" href="https://aleph-labs.com">Aleph Labs</a></li>
					<li><strong>3/2012 - 5/2015:</strong> Lead engineer at <a target="_blank" rel="noopener noreferrer" href="https://www.poste-vn.com">Poste Co., Ltd</a></li>
					<li><strong>11/2011 - 3/2012:</strong> iOS Developer at Universal Information Services Corp. (UIS)</li>
					<li><strong>2009 - 2014:</strong> Student of <a href="http://www.fit.hcmus.edu.vn/vn/Default.aspx?tabid=416" target="_blank" rel="noopener noreferrer">The Faculty of Information Technology (FIT)</a> of <a href="https://en.hcmus.edu.vn/" target="_blank" rel="noopener noreferrer">Ho Chi Minh University of Science</a></li>
				</ul>

				<h3 class="fs-h3 mt-5 mb-3" id="contact">💌 Contact me</h3>
				<ul>
					<li><strong>Twitter: </strong><a href="https://twitter.com/duongdieuphap">@duongdieuphap</a></li>
					<li><strong>Discord: </strong><a href="https://discord.io/imageglass">discord.io/imageglass</a></li>
					<li><strong>Email: </strong><a href="mailto:phap@imageglass.org" target="_blank" rel="noopener noreferrer">phap@imageglass.org</a></li>
					<li><strong>Medium: </strong><a href="https://medium.com/@d2phap" target="_blank" rel="noopener noreferrer">medium.com/@d2phap</a></li>
					<li><strong>Linkedin: </strong><a href="http://linkedin.com/in/duongdieuphap" target="_blank" rel="noopener noreferrer">linkedin.com/in/duongdieuphap</a></li>
					<li><strong>Github: </strong><a href="https://github.com/d2phap" target="_blank" rel="noopener noreferrer">github.com/d2phap</a></li>
					<li><strong>Dribbble: </strong><a href="https://dribbble.com/d2phap" target="_blank" rel="noopener noreferrer">dribbble.com/d2phap</a></li>
				</ul>
			</div>

			<div class="separator my-5"></div>

			<h3 class="fs-h2">
				🤸‍ My collaborator - Kevin Routley
			</h3>
			<p>
				An awesome guy lives on the US East Coast. 
				Not only does he help me to resolve the issues reported, but he also develops new features of ImageGlass.
			</p>
			<p>
				Check out his website: <a href="https://fire-eggs.github.io/" target="blank" rel="noopener noreferrer">fire-eggs.github.io</a>
			</p>

        </article>
    
        <aside class="col-md-4 col-lg-4 col-xxl-3 col-hg-2 px-0 px-md-3 aside">
					@include("shared._ads")
          @include("modules.aside.article-list")
        </aside>
    </div>
</section>

@stop