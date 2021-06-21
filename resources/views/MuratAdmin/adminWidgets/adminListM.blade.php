<!DOCTYPE html>


<body>


    <li class="list-divider"></li>

        <li class="nav-small-cap"><span class="hide-menu">ADMIN</span></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                    aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                        class="hide-menu">İşlemler</span></a>
                <ul aria-expanded="false" class="collapse  first-level base-level-line">
                    <li class="sidebar-item"><a href="{{route("islem.ogrenciekle")}}" class="sidebar-link"><span
                                class="hide-menu"> Öğrenci Ekle
                            </span></a>
                    </li>
                    <li class="sidebar-item"><a href="{{route("islem.ogretmenekle")}}" class="sidebar-link"><span
                                class="hide-menu"> Öğretmen Ekle
                            </span></a>
                    </li>


                     <li class="sidebar-item"><a href="{{route('islem.listeleme')}}" class="sidebar-link"><span
                                class="hide-menu"> Liste
                            </span></a>
                    </li>
                </ul>
    </li>

</body>
</html>
