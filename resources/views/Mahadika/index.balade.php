@section('content')
    <div
        class="scale-100 p-6 bg-gray-800/50 bg-gradient-to-bl from-gray-700/50 via-transparent ring-1 ring-inset ring-white/5 rounded-lg shadow-none flex">
        <div>
            <h2 class="text-xl font-semibold text-white">Data Matakuliah</h2>
            <div class="mt-4 text-gray-400 text-sm leading-relaxed">
                <table class="border-collapse border border-slate-500">
                    <thead class="bg-slate-700 text-white">
                        <tr>
                            <th class="border border-slate-600 px-2 py-1">No</th>
                            <th class="border border-slate-600 px-2 py-1">jurnal ID</th>
                            <th class="border border-slate-600 px-2 py-1">Tipe Jurnal</th>
                            <th class="border border-slate-600 px-2 py-1">No jurnal</th>
                            <th class="border border-slate-600 px-2 py-1">Tanggal Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($jurnalmasuk as $row)
                            <tr class="hover:bg-slate-800 hover:text-white">
                                <th class="border border-slate-600 px-2 py-1">{{ $no++ }}</th>
                                <td class="border border-slate-600 px-2 py-1">{{ $row->jurnalid }}</td>
                                <td class="border border-slate-600 px-2 py-1">{{ $row->tipejurnal }}</td>
                                <td class="border border-slate-600 px-2 py-1">{{ $row->nojurnal }}</td>
                                <td class="border border-slate-600 px-2 py-1">{{ $row->Tgltransaksi}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection