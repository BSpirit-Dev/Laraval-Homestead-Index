<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Homestead Website Available</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    </head>
    <body>
        <header>
            <div class="navbar navbar-dark bg-dark box-shadow">
                <div class="container ml-auto mr-auto text-center d-flex justify-content-around">
                    <a href="/" class="navbar-brand d-flex align-items-center">
                        <i class="far fa-folder-open fa-lg mr-3"></i>
                        <strong>Laravel Homestead Site</strong>
                    </a>
                </div>
            </div>
        </header>
        <main role="main">
            <section class="jumbotron text-center ">
                <div class="container">
                    <h1 class="jumbotron-heading">Laravel Homestead</h1>
                    <p class="lead text-muted">All sites available inside your homestead.yalm</p>
                </div>
            </section>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <?php
                        $myfile =yaml_parse_file('../../homestead.yaml');
                        $groups = array();
                        $i = 1;
                        foreach ($myfile['sites'] as $key => $code) {
                            $firstGroupName = $code['map'][0];
                            $groups[$firstGroupName][$key] = $code;
                        }
                        foreach($groups as $test):
                            foreach ($test as $test1):
                        ?>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img alt="" class="card-img-top" src="http://www.groenewege.com/files/homestead.png"/>
                                <div class="card-body">
                                    <h3 class="display-5 text-center text-black-50"><?php echo $test1['nome']; ?></h3>
                                    <p class="card-text">Website <?php echo $i; ?> file location: <?php echo $test1['to']; ?> </p><p class="card-text"></p> 
                                    <div class="d-flex align-items-center justify-content-around ">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-dark text-center" href="<?= ($i == 1) ? '/' : 'http://'.$test1['map'].'/'; ?>" target="<?= ($i == 1) ? '_self' : '_blank'; ?>">Visit Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++;
                            endforeach;
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <footer class="text-muted">
            <div class="container">
                <p class="float-right"> <a href="#">Back to top</a> </p>
                <p>Powered by Biagio Spitalieri &copy; 2019 - <?= date('Y') ?></p>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.6.3/js/all.js"></script>
    </body>
</html>
