<div class="row row-cols-1 row-cols-md-2"><div class="card bg-dark text-white">
  <img src="{{ $album->album_cover}}" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title"></h5>
  </div>
</div>

<!-- sample album-info Page -->
<div id="album-info" class="px-2">
    <!-- Album's Title -->
    <h1 class="list-title px-2 pt-2 w-100">{{ $album->title }}</h1>
    <br>
    <div class="row list-songs">
        <table class="table table-hover tab-nowrap col-12" style="cursor:pointer;">
            <thead>
            <tr class="col-12">
                <th style="width: 60px"></th>
                <!-- <th style="width: 5%; text-align: center">#</th> -->
                <th style="width: 40%;">Title</th>
                <th style="width: 20%;">Artist</th>
                <th style="width: 20%;">Album</th>
                <th style="width: 10%;"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($album->songs as $song)
                <tr src="{{ $song->url }}">
                    <td scope="row" class="list-artwork">
                        <div class="artwork">
                                    <span class="no-border-radius"
                                          style='background-image: url("{{ $album->album_cover }}");'></span>
                        </div>
                    </td>
                    <td>{{ $song->title }}</td>
                    <td>{{ $song->artist->career_name }}</td>
                    <td>{{ $album->title }}</td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- end of sample album-info Page -->