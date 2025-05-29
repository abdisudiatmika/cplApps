@extends('template')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Input Bobot CPL per Mata Kuliah</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('bobot-cpl.store') }}" method="POST" onsubmit="return validateTotal()">
        @csrf
        
        <div class="mb-3">
            <label for="mataKuliahSelect">Pilih Mata Kuliah</label>
            <select name="mata_kuliah_id" id="mataKuliahSelect" class="form-control" required>
                <option value="">-- Pilih Mata Kuliah --</option>
                @foreach($mataKuliahs as $mk)
                    <option value="{{ $mk->id }}">{{ $mk->kode_mk }} - {{ $mk->nama_mk }}</option>
                @endforeach
            </select>
        </div>

        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th style="width: 60%">CPL</th>
                    <th style="width: 30%">Persentase (%)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cpls as $cpl)
                <tr>
                    <td>{{ $cpl->kode_cpl }} - {{ $cpl->kategori }}</td>
                    <td>
                        <input type="number"
                            name="persentase[{{ $cpl->id }}]"
                            class="form-control persen-input"
                            value="0"
                            min="0"
                            max="100"
                            step="0.01"
                            required>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td class="text-end"><strong>Total:</strong></td>
                    <td><strong><span id="totalPersen">0</span>%</strong></td>
                </tr>
            </tbody>
        </table>

        <button type="button" class="btn btn-secondary mb-3" onclick="bagiRata()">Bagi Rata</button>
        <br>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection

@push('scripts')
<script>
    const bobotTersimpan = @json($bobotTersimpan);

    const inputEls = document.querySelectorAll('.persen-input');
    const totalEl = document.getElementById('totalPersen');

    function updateTotal() {
        let total = 0;
        inputEls.forEach(input => {
            total += parseFloat(input.value || 0);
        });
        totalEl.textContent = total.toFixed(2);
    }

    inputEls.forEach(input => {
        input.addEventListener('input', updateTotal);
    });

    function validateTotal() {
        const total = parseFloat(totalEl.textContent);
        if (total !== 100) {
            alert("Total persentase harus 100%. Sekarang: " + total + "%");
            return false;
        }
        return true;
    }

    function bagiRata() {
        const count = inputEls.length;
        const rata = (100 / count).toFixed(2);
        inputEls.forEach(input => input.value = rata);
        updateTotal();
    }

    document.getElementById('mataKuliahSelect').addEventListener('change', function () {
        const mkId = this.value;

        // Reset
        inputEls.forEach(input => input.value = 0);

        if (bobotTersimpan[mkId]) {
            for (const cplId in bobotTersimpan[mkId]) {
                const input = document.querySelector(`input[name="persentase[${cplId}]"]`);
                if (input) {
                    input.value = bobotTersimpan[mkId][cplId];
                }
            }
        }

        updateTotal();
    });

    updateTotal();
</script>
@endpush
