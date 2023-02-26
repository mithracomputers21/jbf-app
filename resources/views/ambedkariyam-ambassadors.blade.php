@extends('layouts.web')
@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="padding-top:70px;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/banner.jpg" class="d-block w-100" alt="banner1">
      </div>
      <div class="carousel-item">
        <img src="assets/img/banner.jpg" class="d-block w-100" alt="banner2">
      </div>
      <div class="carousel-item">
        <img src="assets/img/banner.jpg" class="d-block w-100" alt="banner3">
      </div>
    </div>
  </div>
<marquee style="font-size:25px; color:red;" attribute_name = "attribute_value"....more attributes>
திருச்சி நிகழ்வில் பதிவு செய்தவர்களின் பெயர்கள் பதிவேற்றும் பணி நடந்து கொண்டிருக்கிறது. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; அடுத்த நிகழ்வுகள் - அம்பேத்கரியம் 50 முன்வெளியீட்டுப் பதிவு மற்றும் ஜெய்பீம் 2.0 நிகழ்வுகள் நடைபெற உள்ள பகுதிகள் கும்பகோணம், சேலம், அரியலூர், கள்ளக்குறிச்சி.
</marquee>
<section id="what-we-do" class="what-we-do">
<div class="container">
<div class="card">
    <div class="card-header">
    அம்பேத்கரிய தூதுவர் பட்டியல்
    </div>

    <div class="card-body">
    <div class="table-responsive">
    <table class=" table table-bordered table-responsive table-striped table-hover datatable datatable-Member">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>
                                        Receipt No
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Plan
                                    </th>
                                    <th>
                                        District
                                    </th>
                                    <th>
                                        Block
                                    </th>
                                    <th>
                                        Village
                                    <th>
                                        Habitation
                                    </th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @foreach($members as $key => $member)
                                    <tr data-entry-id="{{ $member->id }}">
                                        <td>{{ $member->id }}</td>
                                        <td>
                                            {{ intval($member->receipt_number) ?? '' }}
                                        </td>
                                        <td>
                                            {{ $member->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $plan->find($member->plan_id)->plan_name ?? ''  }}
                                        </td>
                                        <td>
                                        {{ $district->find($member->district)->district_name ?? '' }}
                                        </td>
                                        <td>
                                        {{  $block->find($member->block)->block_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $village->find($member->village)->village_name ?? '' }}
                                        <td>
                                            {{ $habitation->find($member->habitation)->habitation_name ?? '' }}
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
        </div>
    </div>
</div>
</div>
</section>

@endsection
@section('scripts')
@parent
@endsection