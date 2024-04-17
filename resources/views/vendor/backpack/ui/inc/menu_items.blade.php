{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Road maps" icon="la la-question" :link="backpack_url('road-map')" />
<x-backpack::menu-item title="Tasks" icon="la la-question" :link="backpack_url('task')" />
<x-backpack::menu-item title="Plants" icon="la la-question" :link="backpack_url('plant')" />
<x-backpack::menu-item title="Services" icon="la la-question" :link="backpack_url('service')" />