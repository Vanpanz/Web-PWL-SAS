<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page - LamarKuy!</title>
    <link rel="stylesheet" href="profil.css">
    
</head>
<body>

   
        
  <div class="app-container">

        <nav class="back-navigation">
            <a href="#" class="back-link">
                <i class="fas fa-arrow-left"></i>
                <span>Kembali</span>
            </a>
        </nav>

        <main class="main-content">

            <aside class="profile-sidebar card">
                <div class="avatar-container">
                    <i class="fas fa-user"></i>
                </div>
                <h2>Username1140</h2>
                <p>@Username1140</p>

                <div class="button-group">
                    <button class="btn btn-primary">ADD PROFILE</button>
                    <button class="btn btn-primary">REMOVE PROFILE</button>
                    <button class="btn btn-primary">LIHAT CV</button>
                <div class="logout-button">
                    <button class="btn btn-primary" onclick="window.location.href='../Isi database/db-logout.php'">LOG OUT</button>
                </div>
                </div>
            </aside>

            <section class="profile-form card">
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" value="Us******@gmail.com" readonly>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" value="************" readonly>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" value="Username1140">
                    </div>

                    <div class="form-group">
                        <label for="nickname">Nickname</label>
                        <input type="text" id="nickname" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="dob">Tanggal Lahir</label>
                        <input type="text" id="dob" placeholder="00/00/0000">
                    </div>
                </form>
            </section>

        </main>
    </div>

</body>
</html>