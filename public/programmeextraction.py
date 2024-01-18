import os
import csv
import tabulate
import pypandoc

def extract_ip_address(text):
    parts = text.split(".")
    return ".".join(parts[:4])

def extract_column_value(text, keyword):
    if keyword in text:
        return text.split(keyword)[1].split(" ")[1]
    return ""

def generate_csv(lines):
    dest_addresses = set()
    csv_data = []

    for line in lines:
        if line.startswith('11:42'):
            parts = line.split(" ")
            time = parts[0]
            source_ip = extract_ip_address(parts[2])

            if source_ip not in dest_addresses:
                dest_addresses.add(source_ip)

            port = parts[2].split(".")[-1]
            destination_ip = parts[4]
            flag = extract_column_value(line, "[")
            seq = extract_column_value(line, ", seq")
            ack = extract_column_value(line, " ack")
            win = extract_column_value(line, " win")
            length = extract_column_value(line, " length").replace(":", "")

            event = [time, f"{source_ip}.{port}", port, f"{destination_ip}:{port}", flag, seq, ack, win, length]
            csv_data.append(event)

            if time == "11:42:55.536521":
                break

    return dest_addresses, csv_data

def main():
    try:
        with open("public/file.txt", encoding="utf8") as file:
            lines = file.read().split('\n')

            dest_addresses, csv_data = generate_csv(lines)

            with open("public/test.csv", "w", newline='') as csv_file:
                csv_writer = csv.writer(csv_file, delimiter=';')
                csv_writer.writerow(["DATE", "SOURCE", "PORT", "DESTINATION", "FLAG", "SEQ", "ACK", "WIN", "LENGTH"])
                csv_writer.writerows(csv_data)

            print("Final destination addresses:", dest_addresses)

            # Convert CSV to Markdown
            markdown_table = tabulate.tabulate(csv_data, headers=["DATE", "SOURCE", "PORT", "DESTINATION", "FLAG", "SEQ", "ACK", "WIN", "LENGTH"], tablefmt="pipe")

            # Convert Markdown to HTML
            html_content = pypandoc.convert_text(markdown_table, "html", format="md")

            # Save HTML content to file
            with open("public/test.html", "w", encoding="utf-8") as html_file:
                html_file.write(html_content)

    except FileNotFoundError:
        print(f"Le fichier n'existe pas {os.path.abspath('public/file.txt')}")
    except Exception as e:
        print(f"Une exception s'est produite : {e}")

if __name__ == "__main__":
    main()
