<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BD-doctors | Admin-Panel</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type='image/x-icon' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .sidebar-section{
            min-height: calc(100vh - 67px); 
            background-color:lightslategray; 
        }

        .sidebar-section ul li{
            padding: 20px 0px 20px 60px;
        }
        .sidebar-section ul li a{
            text-decoration: none;
            color: #000;
        }
        .sidebar-section ul li:hover{
            background-color: aquamarine;
        }
        .inner-boby-section{
            max-height: calc(100vh - 120px);
            overflow-x: hidden;
            overflow-y: auto;
            padding: 10px;
        }
    </style>
</head>

<body>
    <!-- Start Top Navber -->
    
    <div class="top-navber-section border-bottom">
        <nav class="navbar bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('admin.index.get') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="BD-Doctors" width="40" height="40"><span style="color: #00D9A5"> BD</span>-Doctors
                </a>

                <div class="user-profile-section">
                    <div class="dropdown">
                        <img src="{{ asset('img/user.jpg') }}" class="border border-1 rounded-circle" alt=""
                            width="40" height="40">
                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Atik Mahmud
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Change Password</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- End Top Navber -->

    <!-- Start Body Section -->

    <div class="body-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                
                    <!-- Start Sidebar Section -->
    
                    <div class="sidebar-section bg-light border-end">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ route('admin.index.get') }}"><i class="fa-solid fa-gauge-high"></i> Dashboard</a></li>
                            <li class="list-group-item"><a href="#"><i class="fa-solid fa-user-group"></i> Users</a></li>
                            <li class="list-group-item"><a href="#"><i class="fa-solid fa-user-doctor"></i> Doctors</a></li>
                            <li class="list-group-item"><a href="#"><i class="fa-solid fa-calendar-check"></i> Appoinment</a></li>
                            <li class="list-group-item"><a href="#"><i class="fa-solid fa-newspaper"></i> News</a></li>
                          </ul>
                    </div>
    
                    <!-- End Sidebar Section -->
    
                </div>
                <div class="col-md-10">

                    <!-- Start Inner Body Part Section -->

                    <div class="inner-boby-section">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit ex consequuntur, esse quibusdam nulla animi modi sed porro eaque accusamus a numquam ea soluta deserunt! Deleniti molestias magni hic atque nostrum dolore alias maxime cupiditate, animi sit, ipsa doloremque! Quos fuga debitis omnis iusto. Nemo delectus mollitia reprehenderit nihil aspernatur dolore expedita labore earum aperiam hic explicabo velit architecto praesentium saepe eveniet, voluptatibus obcaecati quibusdam dolorum tenetur atque laudantium? Ut a possimus aut totam eveniet asperiores debitis impedit quisquam dicta dolorum facere ea ipsam id beatae praesentium cupiditate reiciendis iure numquam aliquam, tenetur doloremque, eum sapiente sint. Doloribus aut iusto esse, similique qui dolore sed maxime quas error, eaque nulla eligendi architecto ullam unde mollitia in! Veritatis eius iusto explicabo sint cum corporis rerum nihil molestiae. Expedita quam alias inventore dolorem porro reprehenderit error minima, doloribus fugiat itaque repudiandae dolore a commodi, vitae facere. Voluptate sint corporis commodi magni reiciendis quam itaque in delectus beatae eos, pariatur tenetur perferendis eveniet, distinctio, est voluptatibus porro quasi. Praesentium, autem dolore molestias, ipsa nostrum consectetur dolorum optio expedita quos, fugiat quae eligendi iste pariatur inventore impedit aspernatur corporis exercitationem. Error inventore distinctio tempora, accusantium necessitatibus commodi adipisci. Itaque amet illo perferendis maiores, harum totam nulla rem explicabo, molestias hic omnis laudantium! Exercitationem quas aspernatur voluptates placeat laborum repudiandae, asperiores quam odio pariatur, eaque quaerat quidem ipsum quia enim ab a blanditiis consectetur. Ex velit eius totam amet, doloribus inventore similique at voluptates numquam, autem possimus quaerat, ipsa aspernatur officia. Molestiae deserunt aperiam magnam eligendi accusantium, ipsa, consectetur pariatur qui, ducimus nisi consequuntur illum ut officiis. Voluptate provident, explicabo eius exercitationem debitis vitae at possimus beatae, qui facere accusamus. Adipisci officiis perferendis sapiente exercitationem sint rem dolor inventore repudiandae numquam est, vel sed impedit modi aspernatur, laborum fuga nulla, veritatis ea! Officia ipsam veniam quo voluptas repellat corporis iure illum vitae sed vero et doloremque quas dolorum, minima sequi, quibusdam enim exercitationem aspernatur esse similique quis dolore mollitia nobis? Assumenda aperiam dolorem voluptas sapiente numquam maxime earum possimus eligendi, id architecto deserunt? Esse similique nostrum corrupti sunt dolor suscipit, eligendi placeat, nam modi quibusdam ipsam laboriosam optio in dicta tempora alias. Excepturi nostrum quibusdam saepe tenetur quia accusamus maxime consectetur molestiae laboriosam eaque quis vitae dolor voluptatibus perspiciatis illum consequatur tempore sint eum, provident itaque distinctio officiis! Exercitationem odio dignissimos dolores dolor earum et quasi eos harum. Eius ducimus, reiciendis aliquam nisi repudiandae vero distinctio in eos officiis, necessitatibus quas exercitationem inventore! Optio illum ullam fugiat excepturi molestiae repellendus, at, eos nemo atque ex, iste porro hic? Necessitatibus, veritatis. Sint necessitatibus perferendis, rem beatae nesciunt explicabo alias dicta officiis tempora natus exercitationem, quas corporis repudiandae fugit! Eos repellendus dolore est inventore ea. Vero quia ab voluptas omnis ipsa a id dolorum magni quo consequatur. Nemo, quos! Ad at error itaque voluptates? Placeat atque nobis modi assumenda, tenetur alias incidunt ducimus iure eaque quibusdam, voluptatum obcaecati voluptas nam delectus. Veniam amet est autem repellendus. Eum sunt quis et. Modi natus sunt, earum repudiandae, laborum hic recusandae, porro fugiat magnam culpa voluptates inventore? Provident magnam officia nesciunt sequi natus vero incidunt ab voluptatem eligendi exercitationem impedit et excepturi quae rem commodi molestiae, saepe consequuntur porro blanditiis itaque earum dignissimos! Pariatur sit, voluptatem voluptatum molestias tenetur ut consequatur ipsam quasi optio voluptate nobis tempore nisi earum animi veritatis, nostrum corporis necessitatibus numquam laboriosam. Voluptatibus ut nesciunt, eaque nemo impedit quibusdam sed animi nam quod nihil magnam odit, sint repudiandae deleniti qui veritatis amet quasi doloremque tempore sequi quia quaerat. Nihil iure, excepturi voluptatum beatae natus vero saepe voluptas unde eos consequuntur tempore error voluptatem optio iste qui labore incidunt mollitia architecto, debitis cupiditate! Delectus facere provident fuga quo tenetur debitis saepe fugiat unde, facilis labore necessitatibus atque aut? Ut quidem quos illum voluptate eum necessitatibus aut. Sapiente maxime quidem eveniet magni hic. Totam, eligendi sunt porro repellat obcaecati illo incidunt. Laborum excepturi magnam eaque reiciendis adipisci commodi. Eligendi quisquam est cupiditate dolores nisi consectetur doloremque pariatur repudiandae sunt quo! Sed doloribus veritatis aspernatur dolores ipsa, mollitia alias laborum rerum neque ullam ipsum consectetur eligendi similique maiores repellendus ut provident dicta tenetur delectus nesciunt hic possimus. Aperiam deserunt quod fugiat ut quia. Officia harum voluptatum nihil corrupti nisi repudiandae consequuntur ad placeat a quos quas voluptas quae molestiae doloribus tenetur, aut inventore suscipit culpa nesciunt quibusdam perferendis tempora minima recusandae libero. Et ducimus dolore veniam architecto quia rerum eos reiciendis atque in enim ab reprehenderit porro saepe non sed molestiae ipsa necessitatibus, distinctio nam corporis totam repellendus aut pariatur asperiores? Unde autem laboriosam vero reprehenderit necessitatibus dicta quos ab ea ratione blanditiis consequuntur architecto, cum rerum nobis tempora tempore quaerat placeat sint pariatur ex voluptate magnam nemo? Eveniet nulla, dolorem alias ut placeat fugiat pariatur magni temporibus rem cumque libero accusantium nemo harum dignissimos quia exercitationem non itaque aut ab! Cum officiis dolor, repudiandae maiores, corrupti omnis deserunt, nam totam veritatis sit laborum! Ut quae neque magni quidem molestiae exercitationem iste obcaecati omnis esse unde voluptas dolorem quibusdam voluptatum accusamus earum eveniet, suscipit sit saepe iusto similique, libero nihil minima! Assumenda cupiditate repellendus veritatis? Quam aut placeat quidem quae, facere facilis error dicta voluptatem iure quis exercitationem quasi optio quia, commodi maxime, laboriosam harum temporibus ipsa quibusdam deleniti eveniet reiciendis reprehenderit? Sed quis, vel doloribus id mollitia, nobis ratione dolores quidem assumenda, culpa eveniet! Ipsam, dignissimos? Eos nihil cupiditate officia error. Ipsa, magnam! Facilis sed saepe hic. Enim a, quasi repellendus tenetur dolores doloremque eius doloribus repellat quod blanditiis fugiat non aliquid quas error, excepturi fugit inventore esse itaque laboriosam soluta alias ipsam rem? Nemo quia eos molestiae modi eveniet facilis minus natus in laudantium harum debitis, quasi possimus exercitationem similique. Nemo obcaecati aliquid odit, quis excepturi cum? Laborum porro expedita dicta ab. Sapiente dicta fugit dolore repellat reiciendis voluptate error quas dignissimos consectetur. Tempore provident ipsa doloremque! Commodi expedita atque officiis cumque ab quaerat error, dicta impedit ea, consequuntur perferendis, at nemo totam cum quasi necessitatibus id quos ipsa laborum animi eaque qui reiciendis provident pariatur? Quasi.
                    </div>

                    <!-- End Inner Body Part Section -->

                </div>
            </div>
        </div>
    </div>

    <!-- End Body Section -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
