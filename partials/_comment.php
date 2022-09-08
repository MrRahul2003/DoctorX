<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
    .portfolio {
        padding: 6%;
        text-align: center;
    }

    .heading {
        background: #fff;
        padding: 1%;
        text-align: left;
        box-shadow: 0px 0px 4px 0px #545b62;
    }

    .heading img {
        width: 10%;
    }

    .bio-info {
        padding: 5%;
        background: #fff;
        box-shadow: 0px 0px 4px 0px #b0b3b7;
    }

    .name {
        font-family: 'Charmonman', cursive;
        font-weight: 600;
    }

    .bio-image {
        text-align: center;
    }

    .bio-image img {
        border-radius: 50%;
    }

    .bio-content {
        text-align: left;
    }

    .bio-content p {
        font-weight: 600;
        font-size: 30px;
    }

    /* ------------------------------------------ */
    body {
        margin-top: 20px;
    }

    .comment-wrapper .panel-body {
        max-height: 650px;
        overflow: auto;
    }

    .comment-wrapper .media-list .media img {
        width: 64px;
        height: 64px;
        border: 2px solid #e5e7e8;
    }

    .comment-wrapper .media-list .media {
        border-bottom: 1px dashed #efefef;
        margin-bottom: 25px;
    }
    </style>
</head>

<div class="container">
    <div class="row bootstrap snippets bootdeys">
        <div class="col-md-8 col-sm-12">
            <div class="comment-wrapper">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Comment panel
                    </div>
                    <div class="panel-body">
                        <textarea class="form-control" placeholder="write a comment..." rows="3"></textarea>
                        <br>
                        <button type="button" class="btn btn-info pull-right">Post</button>
                        <div class="clearfix"></div>
                        <hr>
                        <ul class="media-list">
                            <li class="media">
                                <a href="#" class="pull-left">
                                    <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                                </a>
                                <div class="media-body">
                                    <span class="text-muted pull-right">
                                        <small class="text-muted">30 min ago</small>
                                    </span>
                                    <strong class="text-success">@MartinoMont</strong>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <a href="#" class="pull-left">
                                    <img src="https://bootdey.com/img/Content/user_2.jpg" alt="" class="img-circle">
                                </a>
                                <div class="media-body">
                                    <span class="text-muted pull-right">
                                        <small class="text-muted">30 min ago</small>
                                    </span>
                                    <strong class="text-success">@LaurenceCorreil</strong>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Lorem ipsum dolor <a href="#">#ipsumdolor </a>adipiscing elit.
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <a href="#" class="pull-left">
                                    <img src="https://bootdey.com/img/Content/user_3.jpg" alt="" class="img-circle">
                                </a>
                                <div class="media-body">
                                    <span class="text-muted pull-right">
                                        <small class="text-muted">30 min ago</small>
                                    </span>
                                    <strong class="text-success">@JohnNida</strong>
                                    <p>
                                        Lorem ipsum dolor <a href="#">#sitamet</a> sit amet, consectetur adipiscing
                                        elit.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- <div class="container portfolio">
    <div class="row">
        <div class="col-md-12">
            <div class="heading">
                <img src="https://image.ibb.co/cbCMvA/logo.png" />
            </div>
        </div>
    </div>
    <div class="bio-info">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bio-image">
                            <img src="https://image.ibb.co/f5Kehq/bio-image.jpg" alt="image" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bio-content">
                    <h1>Hi there, I'm Joy</h1>
                    <h6>"There are only two sorts of doctors: those who practice with their brains, and those who
                        practice with their tongues."</h6>
                    <p>P.S I have no special talent, I'm just passionately curious :)</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

</html>