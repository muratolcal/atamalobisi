        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('dashboard')}}"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Ana Sayfa</span></a></li>


                        @include("MuratAdmin.adminWidgets.adminListM")
                        <form method="get" action="">
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Dersler</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Dersler </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">

                                 @foreach ($lessons as  $lesson)

                                <li class="sidebar-item"><a href="{{route('ders.'.Str::lower(str_replace(" ","",$lesson->dersName)))}}" class="sidebar-link"><span
                                    class="hide-menu"> {{Str::upper($lesson->dersName)}}
                                </span></a>
                                </li>

                                @endforeach

                            </ul>

                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Ders Kayıtları </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                @foreach ($lessons as  $lesson)

                                <li class="sidebar-item"> <a href="form-inputs.html" class="sidebar-link"><span
                                    class="hide-menu"> {{Str::upper($lesson->dersName)}}
                                </span></a>
                                </li>

                                @endforeach
                            </ul>
                        </li>

                    </form>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
