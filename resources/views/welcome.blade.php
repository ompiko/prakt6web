@extends('master')
@section('title', 'LARAVEL')
@section('body')
<h1>Portal - Kabar Burung</h1>
<tbody>
  <?php $no = 1 ?>
  @foreach (App\berita::all() as $berita)
  @if($berita->published == 'yes')
  <tr>
    <a href=<td>{{ $berita->judul }}</td></a>
    <br>
    <td>{{ $berita->isi}}</td>
    <br>
    <td>{{ $berita->created_at->format('M d, Y') }}</td>
    <br>
    <!-- <td>{{ $berita->created_at->diffForHumans() }}</td> -->
    <br><br>
  </tr>
  @endif
  @endforeach
</tbody>

@endsection