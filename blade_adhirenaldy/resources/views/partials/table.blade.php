<style>
    .scroll{
        height: 300px;
        overflow-y: auto;
    }
    .scroll thead th { position: sticky; top: 0; z-index: 1; }
</style>

<div class="mt-5 scroll">
    <table class="table table-dark table-bordered ">
        <thead>
          <tr class="text-center">
            <th scope="col">Movie</th>
            <th scope="col">Penilaian</th>
          </tr>
        </thead>
        <tbody>

        @if ($title === "Home")

            @foreach ( $mvlist as $list )
                <tr class="text-center">
                    <td>
                        <div class="card mb-3 text-white bg-dark border-dark" >
                            <div class="row g-0">
                              <div class="col-md-3">
                                <img src="img/{{ $list['poster'] }}" alt="" width="100" height="120">
                              </div>
                              <div class="col-md-6">
                                <div class="card-body">
                                  <h5 class="card-title">{{ $list['judul'] }}</h5>
                                  <p class="card-text">{{ $list['genre'] }}  ‧  {{ $list['durasi'] }}</p>
                                  <p class="card-text"><small class="text-muted">Reviewed on {{ $list['rvwdate'] }}</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </td>

                    <td>
                        <div><img src="img/star.png" alt="" width="15" height="15">{{ $list['rating'] }}</div>
                        @if ($list['rating']>3)
                            <div class="text-success fw-bold">Bagus</div>
                        @elseif ($list['rating']<3)
                            <div class="text-danger fw-bold">Jelek</div>
                        @else
                            <div class="text-warning fw-bold">Jelek</div>
                        @endif
                    </td>

                </tr>
            @endforeach

        @elseif ($title === "Genre | Action")

            @foreach ( $mvlist as $list )
                @if ($list['genre'] === "Action")
                    <tr class="text-center">
                        <tr class="text-center">
                            <td>
                                <div class="card mb-3 text-white bg-dark border-dark" >
                                    <div class="row g-0">
                                      <div class="col-md-3">
                                        <img src="img/{{ $list['poster'] }}" alt="" width="100" height="120">
                                      </div>
                                      <div class="col-md-6">
                                        <div class="card-body">
                                          <h5 class="card-title">{{ $list['judul'] }}</h5>
                                          <p class="card-text">{{ $list['genre'] }}  ‧  {{ $list['durasi'] }}</p>
                                          <p class="card-text"><small class="text-muted">Reviewed on {{ $list['rvwdate'] }}</small></p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </td>

                            <td>
                                <div><img src="img/star.png" alt="" width="15" height="15">{{ $list['rating'] }}</div>
                                @if ($list['rating']>3)
                                    <div class="text-success fw-bold">Bagus</div>
                                @elseif ($list['rating']<3)
                                    <div class="text-danger fw-bold">Jelek</div>
                                @else
                                    <div class="text-warning fw-bold">Jelek</div>
                                @endif
                            </td>
                    </tr>
                @endif
            @endforeach

        @elseif ($title === "Genre | Horror")

            @foreach ( $mvlist as $list )
                @if ($list['genre'] === "Horror")
                    <tr class="text-center">
                        <tr class="text-center">
                            <td>
                                <div class="card mb-3 text-white bg-dark border-dark" >
                                    <div class="row g-0">
                                      <div class="col-md-3">
                                        <img src="img/{{ $list['poster'] }}" alt="" width="100" height="120">
                                      </div>
                                      <div class="col-md-6">
                                        <div class="card-body">
                                          <h5 class="card-title">{{ $list['judul'] }}</h5>
                                          <p class="card-text">{{ $list['genre'] }}  ‧  {{ $list['durasi'] }}</p>
                                          <p class="card-text"><small class="text-muted">Reviewed on {{ $list['rvwdate'] }}</small></p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </td>

                            <td>
                                <div><img src="img/star.png" alt="" width="15" height="15">{{ $list['rating'] }}</div>
                                @if ($list['rating']>3)
                                    <div class="text-success fw-bold">Bagus</div>
                                @elseif ($list['rating']<3)
                                    <div class="text-danger fw-bold">Jelek</div>
                                @else
                                    <div class="text-warning fw-bold">Jelek</div>
                                @endif
                            </td>
                    </tr>
                @endif
            @endforeach

        @endif


        </tbody>
      </table>
</div>
