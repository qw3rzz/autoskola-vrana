@extends('layouts.app')

@section('title', 'Administrace | Autoškola Vrána')

@section('content')

    <style>
        .admin-wrap{max-width:900px;margin:0 auto;padding:140px 24px 100px;}
        .admin-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:40px;flex-wrap:wrap;gap:16px;}
        .admin-header h1{font-family:'Barlow Condensed';text-transform:uppercase;font-size:34px;margin:0;}
        .admin-header p{color:#777;margin:4px 0 0;font-size:14px;}
        .admin-status{background:#e9f7ec;border:1px solid #b8e6c4;color:#1f7a3a;padding:12px 18px;border-radius:6px;margin-bottom:24px;font-size:14px;}
        .admin-section{margin-bottom:60px;}
        .admin-section h2{font-family:'Barlow Condensed';text-transform:uppercase;font-size:24px;border-bottom:2px solid #181818;padding-bottom:10px;margin-bottom:24px;}
        .admin-item{display:flex;gap:16px;align-items:flex-start;padding:16px 0;border-bottom:1px solid #eee;}
        .admin-item img{width:72px;height:72px;object-fit:cover;border-radius:6px;background:#f2f2f2;flex-shrink:0;}
        .admin-item .no-photo{width:72px;height:72px;border-radius:6px;background:#f2f2f2;display:flex;align-items:center;justify-content:center;color:#aaa;font-size:11px;text-align:center;flex-shrink:0;}
        .admin-item-body{flex:1;min-width:0;}
        .admin-item-body strong{display:block;font-size:16px;}
        .admin-item-body span{display:block;color:#888;font-size:13px;margin-top:2px;}
        .admin-item-body p{margin:6px 0 0;font-size:14px;color:#444;}
        .badge{display:inline-block;font-size:11px;font-weight:700;text-transform:uppercase;padding:3px 8px;border-radius:4px;margin-top:6px;}
        .badge-live{background:#e9f7ec;color:#1f7a3a;}
        .badge-hidden{background:#f3f3f3;color:#999;}
        .admin-item-actions{display:flex;gap:8px;flex-shrink:0;}
        .btn-small{font-family:'Barlow Condensed';font-size:13px;text-transform:uppercase;font-weight:700;padding:7px 14px;border-radius:6px;border:1px solid #ccc;background:#fff;cursor:pointer;}
        .btn-small:hover{border-color:#181818;}
        .btn-small-danger{color:#c0392b;border-color:#f0c4c0;}
        .btn-small-danger:hover{border-color:#c0392b;}
        .admin-form{background:#f9f8f6;border:1px solid #eee;border-radius:8px;padding:22px;margin-top:20px;}
        .admin-form label{display:block;font-size:13px;text-transform:uppercase;letter-spacing:0.4px;color:#555;margin-bottom:5px;margin-top:14px;}
        .admin-form label:first-child{margin-top:0;}
        .admin-form input[type=text], .admin-form textarea{
            width:100%;padding:10px 12px;border:1px solid #ddd;border-radius:6px;font-family:'Work Sans';font-size:14px;
        }
        .admin-form textarea{min-height:80px;resize:vertical;}
        .char-count{font-size:12px;color:#999;text-align:right;margin-top:4px;}
        .char-count.limit{color:#c0392b;font-weight:700;}
        .admin-form .checkbox-row{display:flex;align-items:center;gap:8px;margin-top:14px;}
        .admin-form .checkbox-row input{width:auto;}
        .admin-form .checkbox-row label{margin:0;text-transform:none;font-size:14px;color:#333;}
        .admin-form-submit{margin-top:18px;}
        .field-error{color:#c0392b;font-size:12px;margin-top:4px;}
        details.add-toggle summary{cursor:pointer;font-family:'Barlow Condensed';text-transform:uppercase;font-weight:700;color:var(--red,#D42A2A);font-size:15px;margin-top:16px;}
    </style>

    <div class="admin-wrap">

        <div class="admin-header">
            <div>
                <h1>Administrace</h1>
                <p>Přihlášen jako {{ auth()->user()->name }} ({{ auth()->user()->email }})</p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-small">Odhlásit se</button>
            </form>
        </div>

        @if (session('status'))
            <div class="admin-status">{{ session('status') }}</div>
        @endif

        {{-- ============ O MNĚ ============ --}}
        <div class="admin-section">
            <h2>O mně</h2>

            <div class="admin-item">
                @if ($profile && $profile->photo_path)
                    <img src="{{ asset('storage/' . $profile->photo_path) }}" alt="{{ $profile->name }}">
                @else
                    <div class="no-photo">bez foto</div>
                @endif
                <div class="admin-item-body">
                    <strong>{{ $profile->name ?? '—' }}</strong>
                    <span>{{ $profile->role ?? '' }}</span>
                    @if ($profile && $profile->bio)
                        <p>{{ $profile->bio }}</p>
                    @endif
                </div>
            </div>

            <details class="add-toggle">
                <summary>+ Upravit sekci "O mně"</summary>
                <form class="admin-form" method="POST" action="{{ route('profile.settings.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <label for="prof-name">Jméno a titul</label>
                    <input type="text" id="prof-name" name="name" maxlength="60" required value="{{ old('name', $profile->name ?? '') }}">

                    <label for="prof-role">Role / pozice</label>
                    <input type="text" id="prof-role" name="role" maxlength="60" required value="{{ old('role', $profile->role ?? '') }}">

                    <label for="prof-phone">Telefon</label>
                    <input type="text" id="prof-phone" name="phone" maxlength="30" value="{{ old('phone', $profile->phone ?? '') }}">

                    <label for="prof-bio">Zajímavosti o mně (max. 300 znaků)</label>
                    <textarea id="prof-bio" name="bio" maxlength="300" oninput="document.getElementById('prof-bio-count').textContent = this.value.length">{{ old('bio', $profile->bio ?? '') }}</textarea>
                    <div class="char-count"><span id="prof-bio-count">{{ strlen($profile->bio ?? '') }}</span>/300</div>

                    <label for="prof-photo">Fotka (jpg/png, max. 5 MB)</label>
                    <input type="file" id="prof-photo" name="photo" accept="image/*">

                    <div class="admin-form-submit">
                        <button type="submit" class="btn-small">Uložit změny</button>
                    </div>
                </form>
            </details>
        </div>

        {{-- ============ INSTRUKTOŘI ============ --}}
        <div class="admin-section">
            <h2>Instruktoři</h2>

            @forelse ($instructors as $instructor)
                <div class="admin-item">
                    @if ($instructor->photo_path)
                        <img src="{{ asset('storage/' . $instructor->photo_path) }}" alt="{{ $instructor->name }}">
                    @else
                        <div class="no-photo">bez foto</div>
                    @endif
                    <div class="admin-item-body">
                        <strong>{{ $instructor->name }}</strong>
                        <span>{{ $instructor->role }}</span>
                        @if ($instructor->bio)
                            <p>{{ $instructor->bio }}</p>
                        @endif
                    </div>
                    <div class="admin-item-actions">
                        <form method="POST" action="{{ route('instructors.destroy', $instructor) }}" onsubmit="return confirm('Opravdu smazat tohoto instruktora?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-small btn-small-danger">Smazat</button>
                        </form>
                    </div>
                </div>
            @empty
                <p style="color:#999;font-size:14px;">Zatím žádní instruktoři.</p>
            @endforelse

            <details class="add-toggle">
                <summary>+ Přidat instruktora</summary>
                <form class="admin-form" method="POST" action="{{ route('instructors.store') }}" enctype="multipart/form-data">
                    @csrf
                    <label for="instr-name">Jméno a příjmení</label>
                    <input type="text" id="instr-name" name="name" maxlength="60" required value="{{ old('name') }}">

                    <label for="instr-role">Role / pozice</label>
                    <input type="text" id="instr-role" name="role" maxlength="50" value="{{ old('role') }}" placeholder="Instruktor">

                    <label for="instr-bio">Krátké bio (max. 300 znaků)</label>
                    <textarea id="instr-bio" name="bio" maxlength="300" oninput="document.getElementById('instr-bio-count').textContent = this.value.length">{{ old('bio') }}</textarea>
                    <div class="char-count"><span id="instr-bio-count">0</span>/300</div>

                    <label for="instr-photo">Fotka (jpg/png, max. 5 MB)</label>
                    <input type="file" id="instr-photo" name="photo" accept="image/*">

                    <div class="admin-form-submit">
                        <button type="submit" class="btn-small">Uložit instruktora</button>
                    </div>
                </form>
            </details>
        </div>

        {{-- ============ VOZY ============ --}}
        <div class="admin-section">
            <h2>Naše vozy</h2>

            @forelse ($vehicles as $vehicle)
                <div class="admin-item">
                    @if ($vehicle->photo_path)
                        <img src="{{ asset('storage/' . $vehicle->photo_path) }}" alt="{{ $vehicle->name }}">
                    @else
                        <div class="no-photo">bez foto</div>
                    @endif
                    <div class="admin-item-body">
                        <strong>{{ $vehicle->name }}</strong>
                    </div>
                    <div class="admin-item-actions">
                        <form method="POST" action="{{ route('vehicles.destroy', $vehicle) }}" onsubmit="return confirm('Opravdu smazat tento vůz?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-small btn-small-danger">Smazat</button>
                        </form>
                    </div>
                </div>
            @empty
                <p style="color:#999;font-size:14px;">Zatím žádné vozy.</p>
            @endforelse

            <details class="add-toggle">
                <summary>+ Přidat vůz</summary>
                <form class="admin-form" method="POST" action="{{ route('vehicles.store') }}" enctype="multipart/form-data">
                    @csrf
                    <label for="veh-name">Název vozu</label>
                    <input type="text" id="veh-name" name="name" maxlength="40" required value="{{ old('name') }}" placeholder="Škoda Scala">

                    <label for="veh-photo">Fotka (jpg/png, max. 5 MB)</label>
                    <input type="file" id="veh-photo" name="photo" accept="image/*">

                    <div class="admin-form-submit">
                        <button type="submit" class="btn-small">Uložit vůz</button>
                    </div>
                </form>
            </details>
        </div>

        {{-- ============ RECENZE ============ --}}
        <div class="admin-section">
            <h2>Recenze</h2>

            @forelse ($reviews as $review)
                <div class="admin-item">
                    <div class="admin-item-body">
                        <strong>{{ $review->author_name }}</strong>
                        <p>{{ $review->text }}</p>
                        @if ($review->is_published)
                            <span class="badge badge-live">Zveřejněno</span>
                        @else
                            <span class="badge badge-hidden">Skryto</span>
                        @endif
                    </div>
                    <div class="admin-item-actions">
                        <form method="POST" action="{{ route('reviews.update', $review) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="author_name" value="{{ $review->author_name }}">
                            <input type="hidden" name="text" value="{{ $review->text }}">
                            <input type="hidden" name="is_published" value="{{ $review->is_published ? '0' : '1' }}">
                            <button type="submit" class="btn-small">{{ $review->is_published ? 'Skrýt' : 'Zveřejnit' }}</button>
                        </form>
                        <form method="POST" action="{{ route('reviews.destroy', $review) }}" onsubmit="return confirm('Opravdu smazat tuto recenzi?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-small btn-small-danger">Smazat</button>
                        </form>
                    </div>
                </div>
            @empty
                <p style="color:#999;font-size:14px;">Zatím žádné recenze.</p>
            @endforelse

            <details class="add-toggle">
                <summary>+ Přidat recenzi</summary>
                <form class="admin-form" method="POST" action="{{ route('reviews.store') }}">
                    @csrf
                    <label for="rev-author">Jméno autora</label>
                    <input type="text" id="rev-author" name="author_name" maxlength="40" required value="{{ old('author_name') }}">

                    <label for="rev-text">Text recenze (max. 280 znaků)</label>
                    <textarea id="rev-text" name="text" maxlength="280" required oninput="document.getElementById('rev-text-count').textContent = this.value.length">{{ old('text') }}</textarea>
                    <div class="char-count"><span id="rev-text-count">0</span>/280</div>

                    <div class="checkbox-row">
                        <input type="checkbox" id="rev-published" name="is_published" value="1">
                        <label for="rev-published">Zveřejnit rovnou na webu</label>
                    </div>

                    <div class="admin-form-submit">
                        <button type="submit" class="btn-small">Uložit recenzi</button>
                    </div>
                </form>
            </details>
        </div>

    </div>

@endsection
