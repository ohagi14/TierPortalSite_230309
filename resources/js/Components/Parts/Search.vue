<script setup>
import { router } from "@inertiajs/vue3";
import { ref } from "vue";

let hospitalSearch,hospitalPre = ref("");

const searchHospitals = () => {
	// ショートハンド[条件 ? 処理 : 処理 ;] (AAA > BBB) ? CCC = true : DDD = true;
	(hospitalSearch.value || hospitalPre.value) ? router.get(route("HospitalSearch", { s: hospitalSearch.value, p: hospitalPre.value })) : router.get(route("HospitalSearch"));
};
</script>
