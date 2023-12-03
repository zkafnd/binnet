<template>
    <div>
        <h1>Daftar Pesanan</h1>
        
        <table border="1">
            <thead>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Nama</th>
                    <th>Nomer Telp</th>
                    <th>Alamat</th>
                    <th>Paket Jaringan</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="p in pesanan" :key="p.id">
                    <td>{{ p.id }}</td>
                    <td>{{ p.nama }}</td>
                    <td>{{ p.nomer_telp }}</td>
                    <td>{{ p.alamat }}</td>
                    <td>{{ p.paket_jaringan }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: ['pesanan'],
};
</script>
