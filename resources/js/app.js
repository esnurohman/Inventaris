import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
import "flowbite";
import DataTable from "datatables.net-dt";

let table = new DataTable("#myTable");
