Runner.buttonEvents["Approved"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Approved';
	
	if ( !pageObj.buttonEventBefore['Approved'] ) {
		pageObj.buttonEventBefore['Approved'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var selectedRecords = pageObj.getSelectedRecords();
if (!selectedRecords || selectedRecords.length === 0) {
    swal("Peringatan", "Tidak ada record yang dipilih!", "warning");
    return false;
}
swal("Konfirmasi",
     "Approve " + selectedRecords.length + " pengajuan tiket?",
{
    buttons: {
        cancel: "Batal",
        proceed: {
            text: "Ya, Approve",
            value: "proceed"
        }
    }
})
.then(function(value) {
    if (value === "proceed") {
        submit();
    }
});
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Approved'] ) {
		pageObj.buttonEventAfter['Approved'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
if (typeof result === 'string') {
    result = JSON.parse(result);
}

var msg = result.message || 'Proses selesai';
if (result.details && result.details.length > 0) {
    msg += '\n\nDetail:\n' + result.details.join('\n');
}

var iconType  = result.success ? "success" : "error";
var titleType = result.success ? "Selesai" : "Perhatian";

swal({
    title: titleType,
    text: msg,
    icon: iconType,
    button: "OK"
}).then(function() {
    if (result.success) {
        pageObj.reload();
    }
});
		}
	}
	
	$('a[id="Approved"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Approved" + "_" + Runner.genId();
		
		// create object
		var button_Approved = new Runner.form.Button({
			id: this.id ,
			btnName: "Approved"
		});
		
		// init
		button_Approved.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

