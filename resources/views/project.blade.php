
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas 1</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="project2.css" />
  </head>
  <body>
    <h1>Formulir belajar</h1>
    <form action="#" method="post">
      <div class="input-group">
        <span class="input-group-text">Nama Lengkap</span>
        <input type="text" aria-label="" class="form-control" placeholder="Gabriel"/>
      </div>
      <br />
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input
          type="email"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
        />
        <div id="emailHelp" class="form-text">Isikan saja alamat email-mu</div>
      </div>
      <label>Tanggal lahir</label>
      <input type="date" placeholder="date" id="date" name="date" />
      <br />
    </form>
    <input class="btn btn-primary" type="submit" value="Submit" id="submit"/>
      <hr />
      <h2>UKT per Semester</h2>
      <div class="form-check">
        <input
          class="form-check-input"
          type="radio"
          name="g"
          id="flexRadioDefault1"
        />
        <label class="form-check-label" for="flexRadioDefault1">
          Rp 2.000.000
        </label>
      </div>
      <div class="form-check">
        <input
          class="form-check-input"
          type="radio"
          name="g"
          id="flexRadioDefault2"
        />
        <label class="form-check-label" for="flexRadioDefault2">
          Rp 3.000.000
        </label>
      </div>
      <div class="form-check">
        <input
          class="form-check-input"
          type="radio"
          name="g"
          id="flexRadioDefault3"
        />
        <label class="form-check-label" for="flexRadioDefault3">
          Rp 4.000.000
        </label>
      </div>
      <!-- Example single danger button -->
       <div class="apply">
        <div class="col">
          <label class="visually-hidden" for="autoSizingSelect">Preference</label>
          <select class="form-select" id="autoSizingSelect">
            <option selected>Pembayaran</option>
            <option value="1">Via Transfer</option>
            <option value="2">Kredit</option>
            <option value="3">Cash</option>
            <option value="3">Pinjol</option>
            <option value="3">Patungan sama temen</option>
          </select>
        </div>
        <div class="applied">
          <label for="Persetujuan">Saya menyetujui</label>
          <input
            type="checkbox"
            name="persetujuan"
            id="persetujuan"
            value="betul"
            checked
          />
        </div>
       </div>
      <br />
      <div >
        <label for="critic">Mau protes?</label>
        <br />
        <textarea
          name="critic"
          id="critic"
          cols="40"
          rows="5"
          placeholder=" Adakah sesuatu yang ingin kamu katakan kawan?"
          class="apply"
        ></textarea>
      </div>
      <input class="btn btn-warning" type="submit" value="Submit" id="submit1"/>
    </form>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="project2GI.js"></script>
  </body>
</html>

