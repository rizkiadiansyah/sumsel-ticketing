Runner.buttonEvents["export"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'export';
	
	if ( !pageObj.buttonEventBefore['export'] ) {
		pageObj.buttonEventBefore['export'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var selectedRecords = pageObj.getSelectedRecords();

if (!selectedRecords || selectedRecords.length === 0) {
    swal("Warning", "Tidak ada record yang dipilih!", "warning");
    return false;
}

swal({
    title: "Konfirmasi",
    text: "Export " + selectedRecords.length + " data?",
    icon: "warning",
    buttons: {
        cancel: "Batal",
        confirm: { text: "Ya", value: true }
    }
}).then(function(value) {
    if (value) {
        var ids = selectedRecords.map(function(r) {
            return r.row.keys[0]; // TKT-20260413-0001, dst
        }).join(",");

        console.log("IDs:", ids); // cek dulu sebelum hapus baris ini
        window.open("export_ticket.php?ids=" + ids, "_blank");
    }
});
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['export'] ) {
		pageObj.buttonEventAfter['export'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="export"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "export" + "_" + Runner.genId();
		
		// create object
		var button_export = new Runner.form.Button({
			id: this.id ,
			btnName: "export"
		});
		
		// init
		button_export.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

