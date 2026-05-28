### SET UP PostgresSQL on local computer 

Install PosrgresSQL
- open terminal
- brew install postgresql

### Contect local database
To connect your Homebrew-installed PostgreSQL database to [TablePlus](https://tableplus.com?utm_source=chatgpt.com) on your Mac:

### 1. Make sure PostgreSQL is running

If you installed PostgreSQL with Homebrew, start it with:

```bash
brew services start postgresql
```

Check it’s running:

```bash
brew services list
```

You should see `postgresql` with status `started`.

---

### 2. Find your PostgreSQL username

Usually your macOS username is the default PostgreSQL role.

Run:

```bash
psql postgres
```

If it opens a prompt like:

```sql
postgres=#
```

then PostgreSQL is working.

You can check your current user with:

```sql
SELECT current_user;
```

Exit with:

```sql
\q
```

---

### 3. Open TablePlus and create a connection

In TablePlus:

1. Click **Create a new connection**
2. Choose **PostgreSQL**
3. Enter:

| Field    | Value                             |
| -------- | --------------------------------- |
| Host     | `127.0.0.1`                       |
| Port     | `5432`                            |
| User     | your mac username / postgres user |
| Password | leave blank initially             |
| Database | `postgres`                        |

---

### 4. Test connection

Click **Test** in TablePlus.

If it connects, click **Connect**.

---

### 5. If password authentication fails

Set a password for your PostgreSQL user:

```bash
psql postgres
```

Then inside PostgreSQL:

```sql
ALTER USER your_username WITH PASSWORD 'yourpassword';
```

Example:

```sql
ALTER USER john WITH PASSWORD 'secret123';
```

Then use that password in TablePlus.

---

### 6. If `psql` command is not found

Your PATH may not include PostgreSQL binaries.

For Apple Silicon Macs:

```bash
echo 'export PATH="/opt/homebrew/bin:$PATH"' >> ~/.zshrc
source ~/.zshrc
```

For Intel Macs:

```bash
echo 'export PATH="/usr/local/bin:$PATH"' >> ~/.zshrc
source ~/.zshrc
```

---

Typical local setup looks like:

```text
Host: 127.0.0.1
Port: 5432
User: your_mac_username
Password: (your password or blank)
Database: postgres
```

If you want, I can also help you:

* create a new database
* create a dedicated user
* fix “role does not exist”
* fix authentication errors
* connect using Docker/Postgres.app/Supabase instead
