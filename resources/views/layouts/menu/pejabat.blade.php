<div class="c-sidebar-brand"><img class="c-sidebar-brand-full" src="{{ asset('/assets/brand/coreui-base-white.svg') }}" width="118" height="46" alt="CoreUI Logo"><img class="c-sidebar-brand-minimized" src="assets/brand/coreui-signet-white.svg" width="118" height="46" alt="CoreUI Logo"></div>
<ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/home">
            <i class="c-sidebar-nav-icon cil-speedometer"></i>
            Dashboard</a></li>
  
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon cil-layers"></i>
            <use xlink:href="{{asset('template/@coreui/icons/sprites/free.svg#cil-puzzle')}}"></use>
            </svg> Penilaian SKP
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
            <!-- <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{url('/')}}"><span class="c-sidebar-nav-icon"></span>Periode </a></li> -->
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{url('target')}}"><span class="c-sidebar-nav-icon"></span>Target Tahunan </a></li>

            <!-- <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{url('targettahunan')}}"><span class="c-sidebar-nav-icon"></span>Target Tahunan </a></li> -->
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{url('realiation')}}"><span class="c-sidebar-nav-icon"></span>Realisasi Tahunan </a></li>
            <!-- <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{url('/')}}"><span class="c-sidebar-nav-icon"></span>Nilai Capaian </a></li> -->
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('skps')}}"><span class="c-sidebar-nav-icon"></span>SKP </a></li>
            
            <!-- <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('skps.cetak')}}"><span class="c-sidebar-nav-icon"></span>Form SKP </a></li> -->
            <!-- <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{url('/')}}"><span class="c-sidebar-nav-icon"></span>File SKP </a></li> -->
        </ul>
    </li>
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/kelolauser">
           
           </a></li>

</ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
