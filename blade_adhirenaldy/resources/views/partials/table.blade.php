<table class="table table-dark table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">Poster</th>
        <th scope="col">Judul</th>
        <th scope="col">Genre</th>
        <th scope="col">Durasi</th>
        <th scope="col">Rating</th>
        <th scope="col">Penilaian</th>
      </tr>
    </thead>
    <tbody>

    @if ($title === "Home")

        @foreach ( $mvlist as $list )
            <tr class="text-center">
                <td><img src="img/{{ $list['poster'] }}" alt="" width="100" height="120"></td>
                <td>{{ $list['judul'] }}</td>
                <td>{{ $list['genre'] }}</td>
                <td>{{ $list['durasi'] }}</td>
                <td><img src="img/star.png" alt="" width="15" height="15">{{ $list['rating'] }}</td>
                @if ($list['rating']>3)
                    <td class="text-success fw-bold">Bagus</td>
                @elseif ($list['rating']<3)
                    <td class="text-danger fw-bold">Jelek</td>
                @else
                    <td class="text-warning fw-bold">B aja</td>
                @endif
            </tr>
        @endforeach

    @elseif ($title === "Genre | Action")

        @foreach ( $mvlist as $list )
            @if ($list['genre'] === "Action")
                <tr class="text-center">
                    <td><img src="img/{{ $list['poster'] }}" alt="" width="100" height="120"></td>
                    <td>{{ $list['judul'] }}</td>
                    <td>{{ $list['genre'] }}</td>
                    <td>{{ $list['durasi'] }}</td>
                    <td><img src="img/star.png" alt="" width="15" height="15">{{ $list['rating'] }}</td>
                    @if ($list['rating']>3)
                        <td class="text-success fw-bold">Bagus</td>
                    @elseif ($list['rating']<3)
                        <td class="text-danger fw-bold">Jelek</td>
                    @else
                        <td class="text-warning fw-bold">B aja</td>
                    @endif
                </tr>
            @endif
        @endforeach

    @elseif ($title === "Genre | Horror")

        @foreach ( $mvlist as $list )
            @if ($list['genre'] === "Horror")
                <tr class="text-center">
                    <td><img src="img/{{ $list['poster'] }}" alt="" width="100" height="120"></td>
                    <td>{{ $list['judul'] }}</td>
                    <td>{{ $list['genre'] }}</td>
                    <td>{{ $list['durasi'] }}</td>
                    <td><img src="img/star.png" alt="" width="15" height="15">{{ $list['rating'] }}</td>
                    @if ($list['rating']>3)
                        <td class="text-success fw-bold">Bagus</td>
                    @elseif ($list['rating']<3)
                        <td class="text-danger fw-bold">Jelek</td>
                    @else
                        <td class="text-warning fw-bold">B aja</td>
                    @endif
                </tr>
            @endif
        @endforeach

    @endif


    </tbody>
  </table>
