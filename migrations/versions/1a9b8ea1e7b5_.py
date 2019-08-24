"""empty message

Revision ID: 1a9b8ea1e7b5
Revises: e119ce1a52ba
Create Date: 2019-08-22 23:08:37.828014

"""
from alembic import op
import sqlalchemy as sa


# revision identifiers, used by Alembic.
revision = '1a9b8ea1e7b5'
down_revision = 'e119ce1a52ba'
branch_labels = None
depends_on = None


def upgrade():
    # ### commands auto generated by Alembic - please adjust! ###
    op.create_table('warehouses',
    sa.Column('id', sa.Integer(), nullable=False),
    sa.Column('warehouse_name', sa.String(length=80), nullable=False),
    sa.Column('location', sa.String(length=80), nullable=False),
    sa.PrimaryKeyConstraint('id')
    )
    op.add_column('transactions', sa.Column('warehouses_id', sa.Integer(), nullable=True))
    op.create_foreign_key(None, 'transactions', 'warehouses', ['warehouses_id'], ['id'])
    # ### end Alembic commands ###


def downgrade():
    # ### commands auto generated by Alembic - please adjust! ###
    op.drop_constraint(None, 'transactions', type_='foreignkey')
    op.drop_column('transactions', 'warehouses_id')
    op.drop_table('warehouses')
    # ### end Alembic commands ###
