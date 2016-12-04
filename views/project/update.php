<?php

use ijackua\lepture\Markdowneditor;
use kartik\file\FileInput;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $project \app\models\ProjectForm */

$this->title = Yii::t('app', 'Update post');
?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

    <symbol id="ico_tech" viewBox="0 0 50 50">
        <path
            d="M46.446,19.230 C44.166,21.513 41.134,22.770 37.909,22.770 C37.906,22.770 37.903,22.770 37.900,22.770 C36.923,22.769 35.494,22.455 34.663,22.249 L31.682,25.233 C31.461,25.454 31.171,25.564 30.882,25.564 C30.592,25.564 30.303,25.454 30.082,25.233 C29.640,24.790 29.640,24.074 30.082,23.632 L33.521,20.190 C33.810,19.901 34.231,19.790 34.624,19.900 C35.230,20.068 37.000,20.505 37.902,20.505 C37.904,20.505 37.907,20.505 37.909,20.505 C40.530,20.505 42.993,19.484 44.846,17.629 C46.701,15.773 47.722,13.305 47.722,10.679 C47.722,7.843 46.487,5.171 44.404,3.325 L44.405,10.735 C44.405,11.107 44.222,11.455 43.917,11.666 L38.548,15.384 C38.161,15.652 37.648,15.652 37.260,15.383 L31.893,11.664 C31.588,11.453 31.406,11.105 31.406,10.734 L31.403,3.324 C29.320,5.171 28.085,7.845 28.085,10.684 C28.085,12.079 28.401,13.465 29.024,14.806 C29.225,15.237 29.134,15.747 28.798,16.083 L27.864,17.019 C27.423,17.461 26.706,17.461 26.265,17.019 C25.823,16.577 25.823,15.860 26.264,15.418 L26.658,15.024 C26.103,13.611 25.822,12.154 25.822,10.684 C25.822,6.331 28.181,2.294 31.977,0.148 C32.327,-0.050 32.756,-0.047 33.103,0.156 C33.450,0.359 33.664,0.731 33.664,1.133 L33.668,10.140 L37.904,13.076 L42.142,10.142 L42.141,1.136 C42.141,0.733 42.355,0.361 42.702,0.158 C43.049,-0.045 43.478,-0.048 43.828,0.150 C47.625,2.294 49.984,6.328 49.985,10.679 C49.985,13.909 48.728,16.946 46.446,19.230 ZM28.854,20.166 C29.296,20.608 29.295,21.325 28.854,21.767 L26.960,23.662 L38.678,35.389 L41.922,36.566 C42.077,36.623 42.219,36.713 42.336,36.830 L48.911,43.410 C49.123,43.622 49.242,43.910 49.242,44.210 C49.242,44.511 49.123,44.799 48.911,45.011 L44.633,49.292 C44.412,49.513 44.122,49.624 43.833,49.624 C43.543,49.624 43.254,49.513 43.033,49.292 L36.458,42.712 C36.341,42.595 36.251,42.454 36.194,42.298 L35.018,39.051 L23.300,27.325 L21.406,29.220 C20.965,29.662 20.249,29.662 19.807,29.220 C19.471,28.884 19.391,28.391 19.564,27.979 L1.840,10.242 C0.765,9.167 0.172,7.736 0.171,6.215 C0.170,4.692 0.762,3.260 1.839,2.183 C2.914,1.108 4.343,0.517 5.863,0.517 C5.866,0.517 5.868,0.517 5.870,0.517 C7.390,0.519 8.818,1.112 9.890,2.189 L27.614,19.923 C28.025,19.750 28.518,19.831 28.854,20.166 ZM36.796,37.628 C36.913,37.746 37.003,37.887 37.059,38.043 L38.236,41.289 L43.833,46.891 L46.511,44.210 L40.914,38.609 L37.670,37.432 C37.514,37.375 37.373,37.285 37.256,37.168 L25.360,25.263 L24.900,25.724 L36.796,37.628 ZM8.289,3.788 C7.642,3.139 6.783,2.782 5.867,2.781 C5.866,2.781 5.865,2.781 5.863,2.781 C4.947,2.781 4.086,3.137 3.438,3.785 C2.790,4.434 2.433,5.296 2.433,6.214 C2.434,7.131 2.791,7.993 3.440,8.641 L21.105,26.319 L24.553,22.869 C24.555,22.867 24.558,22.864 24.560,22.862 C24.562,22.859 24.565,22.857 24.567,22.855 L25.955,21.466 L8.289,3.788 ZM21.463,22.956 C21.173,22.956 20.884,22.845 20.663,22.624 L5.058,7.008 C4.616,6.565 4.616,5.849 5.058,5.406 C5.500,4.965 6.216,4.965 6.658,5.406 L22.263,21.023 C22.705,21.465 22.705,22.182 22.263,22.624 C22.042,22.845 21.752,22.956 21.463,22.956 ZM4.369,44.948 C4.367,44.947 4.366,44.946 4.365,44.944 C3.824,44.399 3.827,43.515 4.371,42.975 C4.629,42.715 4.979,42.569 5.352,42.569 C5.352,42.569 5.352,42.569 5.353,42.569 C5.725,42.569 6.075,42.714 6.338,42.978 C6.879,43.518 6.881,44.401 6.339,44.946 C6.066,45.218 5.709,45.354 5.352,45.354 C4.995,45.354 4.640,45.219 4.369,44.948 ZM15.062,26.629 C15.503,26.187 16.220,26.187 16.661,26.629 C17.103,27.071 17.103,27.788 16.661,28.230 L3.164,41.739 C2.574,42.327 2.249,43.110 2.248,43.943 C2.247,44.779 2.571,45.565 3.161,46.155 C3.750,46.745 4.534,47.071 5.368,47.071 C5.369,47.071 5.369,47.071 5.370,47.071 C6.203,47.070 6.987,46.745 7.577,46.154 L23.269,30.450 C23.711,30.008 24.427,30.008 24.869,30.450 C25.311,30.892 25.311,31.609 24.869,32.051 L9.177,47.755 C8.160,48.773 6.809,49.334 5.371,49.335 C5.370,49.335 5.369,49.335 5.368,49.335 C3.930,49.335 2.578,48.774 1.561,47.756 C0.543,46.737 -0.016,45.382 -0.014,43.941 C-0.012,42.502 0.549,41.151 1.566,40.136 L15.062,26.629 Z"/>
    </symbol>

    <symbol id="ico_2x" viewBox="0 0 80 50">
        <path
            d="M79.977,49.814 L77.711,49.814 L65.299,32.668 L52.920,49.814 L50.654,49.814 L64.183,31.081 L51.330,13.293 L53.630,13.293 L65.333,29.495 L77.001,13.293 L79.301,13.293 L66.449,31.081 L79.977,49.814 ZM40.778,50.017 C40.259,50.017 39.819,49.836 39.459,49.477 C39.098,49.117 38.918,48.678 38.918,48.160 C38.918,47.643 39.098,47.198 39.459,46.827 C39.819,46.456 40.259,46.270 40.778,46.270 C41.296,46.270 41.742,46.456 42.114,46.827 C42.486,47.198 42.672,47.643 42.672,48.160 C42.672,48.678 42.486,49.117 42.114,49.477 C41.742,49.836 41.296,50.017 40.778,50.017 ZM1.206,47.992 L17.339,29.427 C18.872,27.672 20.191,26.041 21.296,24.533 C22.401,23.026 23.314,21.613 24.036,20.297 C24.757,18.981 25.293,17.738 25.643,16.567 C25.992,15.398 26.167,14.272 26.167,13.192 C26.167,11.459 25.913,9.890 25.406,8.483 C24.899,7.077 24.138,5.879 23.123,4.889 C22.108,3.899 20.851,3.139 19.352,2.610 C17.852,2.082 16.122,1.817 14.160,1.817 C12.401,1.817 10.766,2.138 9.256,2.779 C7.745,3.420 6.437,4.310 5.333,5.446 C4.228,6.582 3.365,7.926 2.745,9.479 C2.125,11.032 1.815,12.719 1.815,14.542 L-0.011,14.542 C-0.011,12.562 0.332,10.689 1.020,8.922 C1.708,7.156 2.678,5.609 3.929,4.281 C5.180,2.954 6.674,1.907 8.410,1.142 C10.146,0.377 12.063,-0.006 14.160,-0.006 C16.279,-0.006 18.190,0.276 19.893,0.838 C21.595,1.401 23.049,2.239 24.256,3.353 C25.462,4.467 26.392,5.845 27.046,7.488 C27.700,9.130 28.027,11.032 28.027,13.192 C28.027,14.723 27.734,16.252 27.148,17.782 C26.561,19.313 25.789,20.843 24.831,22.373 C23.872,23.903 22.785,25.422 21.567,26.930 C20.349,28.437 19.120,29.923 17.881,31.385 L3.608,47.992 L30.665,47.992 L30.665,49.814 L1.206,49.814 L1.206,47.992 Z"/>
    </symbol>

    <symbol id="ico_cactus" viewBox="0 0 50 50">
        <path
            d="M36.277,3.625 C35.836,3.183 35.120,3.182 34.678,3.623 L33.334,4.964 C33.080,4.825 32.808,4.714 32.525,4.632 L32.525,2.760 C32.525,2.135 32.019,1.629 31.394,1.629 C30.770,1.629 30.264,2.135 30.264,2.760 L30.264,4.632 C29.974,4.716 29.698,4.830 29.439,4.972 L28.138,3.671 C27.697,3.229 26.981,3.229 26.539,3.671 C26.098,4.113 26.098,4.829 26.539,5.271 L27.834,6.566 C27.506,7.154 27.318,7.830 27.318,8.550 L27.318,16.452 C27.318,16.478 27.296,16.500 27.271,16.500 L25.079,16.500 L25.079,6.801 C25.079,3.051 22.029,-0.000 18.281,-0.000 C14.532,-0.000 11.483,3.051 11.483,6.801 L11.483,22.221 L9.291,22.221 C9.266,22.221 9.244,22.198 9.244,22.173 L9.244,16.235 C9.244,15.509 9.052,14.828 8.719,14.237 L10.048,12.910 C10.490,12.469 10.491,11.753 10.050,11.310 C9.609,10.868 8.893,10.867 8.451,11.308 L7.108,12.649 C6.853,12.511 6.582,12.400 6.298,12.318 L6.298,10.445 C6.298,9.820 5.792,9.314 5.167,9.314 C4.543,9.314 4.037,9.820 4.037,10.445 L4.037,12.318 C3.748,12.401 3.471,12.515 3.212,12.658 L1.912,11.356 C1.470,10.914 0.754,10.914 0.313,11.356 C-0.129,11.798 -0.129,12.514 0.313,12.956 L1.608,14.252 C1.279,14.839 1.091,15.515 1.091,16.235 L1.091,22.173 C1.091,26.697 4.770,30.377 9.291,30.377 L11.483,30.377 L11.483,34.103 L10.010,34.103 L8.083,34.103 C7.458,34.103 6.952,34.609 6.952,35.234 C6.952,35.859 7.458,36.365 8.083,36.365 L8.970,36.365 L10.014,48.963 C10.063,49.549 10.553,50.000 11.141,50.000 L25.384,50.000 C25.972,50.000 26.462,49.549 26.511,48.963 L27.249,40.068 C27.316,39.923 27.355,39.761 27.355,39.590 C27.355,39.486 27.340,39.384 27.313,39.288 L27.556,36.365 L28.160,36.365 C28.785,36.365 29.291,35.859 29.291,35.234 C29.291,34.609 28.785,34.102 28.160,34.102 L26.515,34.102 L25.079,34.102 L25.079,24.656 L27.271,24.656 C31.792,24.656 35.470,20.976 35.470,16.452 L35.470,8.550 C35.470,7.824 35.279,7.143 34.945,6.552 L36.275,5.225 C36.717,4.784 36.718,4.067 36.277,3.625 ZM25.113,38.459 L17.503,38.459 C16.878,38.459 16.372,38.966 16.372,39.590 C16.372,40.215 16.878,40.722 17.503,40.722 L24.925,40.722 L24.343,47.738 L12.182,47.738 L11.600,40.722 L14.111,40.722 C14.735,40.722 15.241,40.215 15.241,39.590 C15.241,38.966 14.735,38.459 14.111,38.459 L11.412,38.459 L11.239,36.365 L25.286,36.365 L25.113,38.459 ZM33.209,16.452 C33.209,19.728 30.545,22.394 27.271,22.394 L23.948,22.394 C23.324,22.394 22.818,22.900 22.818,23.525 L22.818,34.102 L13.744,34.102 L13.744,29.246 C13.744,28.621 13.238,28.114 12.613,28.114 L9.291,28.114 C6.017,28.114 3.353,25.449 3.353,22.173 L3.353,16.235 C3.353,15.810 3.501,15.419 3.746,15.109 C3.808,15.068 3.867,15.021 3.921,14.966 C3.972,14.915 4.016,14.861 4.055,14.803 C4.363,14.564 4.748,14.419 5.168,14.419 C6.168,14.419 6.982,15.234 6.982,16.235 L6.982,22.173 C6.982,23.447 8.018,24.483 9.291,24.483 L12.613,24.483 C13.238,24.483 13.744,23.976 13.744,23.352 L13.744,6.801 C13.744,4.298 15.779,2.262 18.281,2.262 C20.782,2.262 22.818,4.298 22.818,6.801 L22.818,17.631 C22.818,18.256 23.324,18.762 23.948,18.762 L27.271,18.762 C28.544,18.762 29.579,17.726 29.579,16.452 L29.579,8.550 C29.579,8.125 29.727,7.734 29.973,7.424 C30.035,7.383 30.093,7.336 30.148,7.281 C30.198,7.230 30.243,7.175 30.282,7.118 C30.589,6.878 30.975,6.734 31.394,6.734 C32.395,6.734 33.209,7.548 33.209,8.550 L33.209,16.452 L33.209,16.452 Z"/>
    </symbol>

    <symbol id="ico_del" viewBox="0 0 32 32">
        <path
            d="M28.494,27.764 L27.764,28.494 L16.000,16.730 L4.236,28.494 L3.506,27.764 L15.270,16.000 L3.506,4.236 L4.236,3.506 L16.000,15.270 L27.764,3.506 L28.494,4.236 L16.730,16.000 L28.494,27.764 Z"/>
    </symbol>

</svg>

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


        <?= $form->field($project, 'title')->textInput(['maxlength' => true, 'class' => 'form-control input-lg']) ?>

        <?= $form->field($project, 'link')->textInput(['maxlength' => true, 'class' => 'form-control input-lg']) ?>

        <div class="form-group">
            <?= Html::activeLabel($project, 'body') ?>
            <?= Markdowneditor::widget(
                [
                    'model' => $project,
                    'attribute' => 'body',
                    'options' => ['rows' => 3]
                ]
            ) ?>
            <?= Html::error($project, 'body', ['class' => 'text-danger']) ?>
        </div>


        <div class="form-group">
            <label class="control-label"><?= Yii::t('app', 'Add screenshots') ?></label>
            <?php

            $images = [];
            $initialPreviewConfig = [];

            foreach ($project->Project->images as $image) {

                $images[] = Html::img(
                    Yii::$app->params['url.to.project.images'] . $image->name,
                    ['class' => 'file-preview-image']
                );

                $initialPreviewConfig[] = [
                    'url' => Url::to(['/project/delete-image']),
                    'key' => $image->id,
                    'caption' => sprintf('<a href="%s">%s</a>', $image->filename, Yii::t('app', 'Link')),
                ];
            }

            echo FileInput::widget(
                [
                    'name' => 'imageFiles[]',
                    'options' => [
                        'multiple' => true,
                        'maxFileCount' => 7,
                        'id' => 'file-upload'
                    ],
                    'pluginOptions' => [
                        'showPreview' => true,
                        'showCaption' => true,
                        'showRemove' => false,
                        'showUpload' => true,
                        'initialPreview' => $images,
                        'initialPreviewConfig' => $initialPreviewConfig,
                        'overwriteInitial' => false,
                        'uploadUrl' => Url::to(['/project/add-image', 'id' => $project->Project->id]),
                    ],
                    'pluginEvents' => [
                        'filepredelete' => "function(event, key) {
                                    return (!confirm('Are you sure you want to delete ?'));
                                }",
                    ]
                ]
            );
            ?>
            <p class="hint"><?= $project->getAttributeHint('imageFiles') ?></p>
            <?= Html::error($project, 'imageFiles', ['class' => 'text-danger']) ?>
        </div>

        <div class="form-group btns-group-topborder">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success btn-lg']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

    <div class="hidden-xs hidden-sm col-md-3 col-lg-3">

        <h4>Как правильно добавить проект?</h4>

        <div class="hint-item hint-tech">
            <svg>
                <use xlink:href="#ico_tech"/>
            </svg>
            Подробно опишите какие технологии вы использовали для разработки проекта в описании и при добавлении
            тегов.
        </div>
        <div class="hint-item hint-2x">
            <svg>
                <use xlink:href="#ico_2x"/>
            </svg>
            Не забудьте указать какую версию фреймворка вы использовали в своей работе и почему.
        </div>
        <div class="hint-item hint-cactus">
            <svg>
                <use xlink:href="#ico_cactus"/>
            </svg>
            Если при разработке проекта вы столкнулись с какими-либо трудностями, не поленитесь их описать, и
            поделитесь
            с сообществом вашими решениями.
        </div>
    </div>
</div>