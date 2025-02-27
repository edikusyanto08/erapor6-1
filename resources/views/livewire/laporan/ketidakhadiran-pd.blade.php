<div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center" width="55%">Nama Peserta Didik</th>
                <th class="text-center" width="15%">Sakit</th>
                <th class="text-center" width="15%">Izin</th>
                <th class="text-center" width="15%">Tanpa Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_siswa as $siswa)
            <tr>
                <td>{{$siswa->nama}}</td>
                @role('wali', session('semester_id'))
                <td><input type="number" class="form-control" wire:ignore wire:model="sakit.{{$siswa->anggota_rombel->anggota_rombel_id}}" /></td>
				<td><input type="number" class="form-control" wire:ignore wire:model="izin.{{$siswa->anggota_rombel->anggota_rombel_id}}" /></td>
				<td><input type="number" class="form-control" wire:ignore wire:model="alpa.{{$siswa->anggota_rombel->anggota_rombel_id}}" /></td>
                @else
                <td class="text-center">
                    {{$sakit[$siswa->anggota_rombel->anggota_rombel_id]}}
                </td>
                <td class="text-center">
                    {{$izin[$siswa->anggota_rombel->anggota_rombel_id]}}
                </td>
                <td class="text-center">
                    {{$alpa[$siswa->anggota_rombel->anggota_rombel_id]}}
                </td>
                @endrole
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
