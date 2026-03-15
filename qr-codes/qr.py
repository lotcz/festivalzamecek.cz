from qrcodegen import QrCode

def create_qr_svg(qr_text, border, file_name):
    """Creates a single QR Code, then prints it to the svg file"""
    errcorlvl = QrCode.Ecc.HIGH  # Error correction level
    qr = QrCode.encode_text(qr_text, errcorlvl)
    text_file = open(file_name,"w")
    text_file.write(qr.to_svg_str(border))
    text_file.close()

def create_qr_transfer(target_account_iban, message, amount, recipient_name, is_instant, variable_symbol, border, file_name):
	pt = "*PT:IP" if is_instant else ""
	vs = f"*X-VS:{variable_symbol}" if variable_symbol else ""
	text = f"SPD*1.0*ACC:{target_account_iban}*AM:{amount}*CC:CZK*MSG:{message}*RN:{recipient_name}{pt}{vs}"
	create_qr_svg(text, border, file_name)

def create_zamecek2025_transfer(message, amount, file_name):
	account = "CZ7562106701002227789527"
	recipient = "FESTIVAL ZAMECEK"
	create_qr_transfer(account, message, amount, recipient, True, "20250517", 0, file_name)
	
create_zamecek2025_transfer("Pametni placka", "50.00", "placka-50.svg")
create_zamecek2025_transfer("Pametni placky 2x", "100.00", "placka-100.svg")
create_zamecek2025_transfer("Kelimek", "150.00", "kelimek-150.svg")
create_zamecek2025_transfer("Kelimek + placka", "200.00", "kelimek-placka-200.svg")
