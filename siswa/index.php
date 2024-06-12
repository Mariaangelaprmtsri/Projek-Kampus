<div class="flex-1 p-8">
    <h1 class="text-xl font-bold mb-4">Daftar siswa</h1>
    <div>
        <?php Flasher::flash(); ?>
    </div>
    <div class="card p-8 bg-[#fbfbfb]">
        <div class=" w-full text-end">
            <a href="<?= BASEURL ?>/siswa/add"
                class="text-white text-md font-semibold rounded-md px-6 py-2 bg-[#5570ed] hover:bg-[#3c51b1] duration-200">Add
                Siswa</a>
        </div>
        <table class="mt-4 min-w-full overflow-hidden rounded-t-lg">
            <thead class="text-md bg-[#5570ed]">
                <tr>
                    <th class="p-2.5 text-white">No</th>
                    <th class="p-2.5 text-white">Nama</th>
                    <th class="p-2.5 text-white">Kelas</th>
                    <th class="p-2.5 text-white">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-auto">
                <?php
                foreach ($data['siswas'] as $siswa) {
                    echo "<tr class='bg-[#eff0f5]'>";
                    echo "<td class='p-3'>" . $siswa['id'] . "</td>";
                    echo "<td class='p-3'>" . $siswa['nama'] . "</td>";
                    echo "<td class='p-3'>" . $siswa['kelas_nama'] . "</td>";
                    echo "<td class='h-full w-min'>" .
                        "<div class='flex gap-3'>" .
                        "<a href='" . BASEURL . "/siswa/detail/" . $siswa['id'] . "' class='text-white font-semibold px-4 py-1 bg-[#5570ed] hover:bg-[#3c51b1] duration-200 rounded-lg'>preview</a>" .
                        "<a href='" . BASEURL . "/siswa/delete/" . $siswa['id'] . "' class='text-white font-semibold px-4 py-1 bg-[#ED5555] hover:bg-[#9e3939] duration-200 rounded-lg'>delete</a>" .
                        "</div>" .
                        "</td>";
                    echo "</tr>";
                }
                ?>
                <?php
                foreach ($data['siswas_not_kelas'] as $siswa) {
                    echo "<tr class='bg-[#eff0f5]'>";
                    echo "<td class='p-3'>" . $siswa['id'] . "</td>";
                    echo "<td class='p-3'>" . $siswa['nama'] . "</td>";
                    echo "<td class='p-3'> Tidak punya kelas </td>";
                    echo "<td class='h-full w-min'>" .
                        "<div class='flex gap-3'>" .
                        "<a href='" . BASEURL . "/siswa/detail/" . $siswa['id'] . "' class='text-white font-semibold px-4 py-1 bg-[#5570ed] hover:bg-[#3c51b1] duration-200 rounded-lg'>preview</a>" .
                        "<a href='" . BASEURL . "/siswa/delete/" . $siswa['id'] . "' class='text-white font-semibold px-4 py-1 bg-[#ED5555] hover:bg-[#9e3939] duration-200 rounded-lg'>delete</a>" .
                        "</div>" .
                        "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>