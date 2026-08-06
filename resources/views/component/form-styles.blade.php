<style>
  /* Paksa form field selalu terang (mencegah auto dark-mode browser/OS
     membuat input gelap sehingga teks tidak terlihat). */
  :root {
    color-scheme: light;
  }

  input,
  select,
  textarea,
  button {
    color-scheme: light;
  }

  input:not([type="checkbox"]):not([type="radio"]):not([type="file"]),
  textarea,
  select {
    background-color: #ffffff;
    color: #374151;
  }

  input:not([type="checkbox"]):not([type="radio"]):not([type="file"]):focus,
  textarea:focus,
  select:focus {
    background-color: #ffffff;
  }

  input::placeholder,
  textarea::placeholder {
    color: #9ca3af;
    opacity: 1;
  }
</style>
