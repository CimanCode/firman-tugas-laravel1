
<div style="background-color: aquamarine;
            margin:10px;
            padding:10px;
            border-radius:15px;
            box-shadow:1px 1px 4px rgba(0,0,0,.5);
            width: 350px;">
    <div>
        <img src="{{ $usr ['foto'] }}" alt="image" style="width: 100%;"/>
    </div>
    <div>
        <h1 style="text-align: center;">BIODATA</h1>
        <h4>Nama   : {{ $usr['nama'] }}</h4>
        <h4>Alamat : {{ $usr['alamat']}}</h4>
        <h4>Bio    : {{ $usr['bio'] }}</h4>
        <h4>Role   : {{ $usr['role'] }}</h4>
        <h4>Status : {{ $usr['active']? 'active' : 'Non Active' }}</h4>
    </div>
</div>

