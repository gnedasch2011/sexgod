<div class="site__body">
    <div class="block-map block">
        <div class="block-map__body">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A70fb78aa59144749822053d6e3b78f876cef749b01ec2499c2db8b9a646367e7&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
        </div>
    </div>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Главная</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Контакты</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="card mb-0">
                <div class="card-body contact-us">
                    <div class="contact-us__container">
                        <div class="row">
                            <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                <h4 class="contact-us__header card-title">Адрес:</h4>
                                <div class="contact-us__address">
                                    <p>
                                        <?= Yii::$app->params['address']; ?><br>
                                        Email:     <?= Yii::$app->params['email']; ?><br>
                                        Телефон: <?= Yii::$app->params['phone']; ?>
                                    </p>
                                    <p>
                                        <strong>Часы работы:</strong><br>
                                        <?= Yii::$app->params['workingHours']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h4 class="contact-us__header card-title">Оставьте сообщение</h4>
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="form-name">Your Name</label>
                                            <input type="text" id="form-name" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="form-email">Email</label>
                                            <input type="email" id="form-email" class="form-control" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="form-subject">Subject</label>
                                        <input type="text" id="form-subject" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <label for="form-message">Message</label>
                                        <textarea id="form-message" class="form-control" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>