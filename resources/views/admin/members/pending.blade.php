<!DOCTYPE html>
<html>
<head>
    <title>Member Pending</title>
</head>
<body>
    <h2>Daftar Anggota yang Masih Pending</h2>

    @foreach($members as $member)
        <div style="border:1px solid #ccc; padding:10px; margin:10px;">
            <strong>Nama:</strong> {{ $member->name }} <br>
            <strong>Email:</strong> {{ $member->email }} <br>
            <strong>Kelas:</strong> {{ $member->school_class }} <br>
            @if($member->photo)
                <img src="{{ asset('storage/' . $member->photo) }}" width="100">
            @endif

            <!-- Tombol untuk setujui -->
            <form action="{{ route('members.approve', $member->id) }}" method="POST" style="margin-top: 10px;">
                @csrf
                @method('POST')
                <button type="submit">Setujui</button>
            </form>
        </div>
    @endforeach
</body>
</html>
