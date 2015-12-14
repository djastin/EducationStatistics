@include('baseContent.header')

<body>

<ul id="nav">
    <li class="current"><a href="#section-one">1</a></li>
    <li><a href="#section-two">2</a></li>
    <li><a href="#g">3</a></li>
    <li><a href="#sep">4</a></li>
</ul>

<div class="container ptb header" id="section-one">
    <div class="circle">
        <div id="graph">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

</div>

<div class="container ptb fullpage" id="section-two">
    <div class="row">
        <h2 class="centered mb">Relatie met bevolking en onderwijs</h2>
        <div class="col-md-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div><!--/col-md-6-->
        <div class="col-md-6">
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</p>
        </div><!--/col-md-6-->
    </div><!--/row-->
</div><!-- /.container -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- img -->
        </div>
    </div><!--/row-->
</div><!--/.container-->

<div id="g" class="fullpage">
    <div class="container">
        <div class="row centered">
            <h2>Check some of my latest works.</h2>
            <div class="col-md-8 col-md-offset-2">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.<br/>It has roots in a piece of classical Latin literature<br/>from 45 BC, making it over 2000 years old.</p>

            </div><!--/col-md-8-->
        </div><!--/row-->
    </div><!--/.container-->
</div><!--/.G-->

<div id="sep">
    <div class="container sep-container">
        <div class="row centered">
            <div class="col-md-8 col-md-offset-2">
                <h1>Conclusie</h1>
                <h3 class="mb">Lorem Ipsum is simply dummy text<br/>of the printing and typesetting industry.</h3>
                <button class="btn btn-conf btn-clear">Data Analyse 1 | Hogeschool Zeeland</button>
            </div>
        </div><!--/row-->
    </div><!--/container-->
</div><!--/.sep-->


@include('baseContent.footer')
@include('baseContent.scripts')


</body>
</html>
